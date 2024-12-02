<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VuelosController extends Controller
{
    public function buscarVuelos(Request $request)
    {
        // Validar entrada
        $validated = $request->validate([
            'origen' => 'nullable|string|max:255',
            'destino' => 'nullable|string|max:255',
            'fechasalida' => 'nullable|date',
            'filtroprecio' => 'nullable|string',
            'duracion' => 'nullable|string',
        ]);

        // Log de entrada para depuración
        \Log::info('Datos recibidos en buscarVuelos:', $validated);

        // Construir consulta
        $query = DB::table('vuelos')
            ->join('aerolineas', 'vuelos.id_aerolinea', '=', 'aerolineas.id')
            ->join('clases_vuelos', 'vuelos.id_clase', '=', 'clases_vuelos.id')
            ->select(
                'vuelos.*',
                'aerolineas.nombre as aerolinea',
                'clases_vuelos.nombre_clase'
            );

        if ($request->filled('origen')) {
            $query->where('vuelos.origen', 'LIKE', "%{$validated['origen']}%");
        }

        if ($request->filled('destino')) {
            $query->where('vuelos.destino', 'LIKE', "%{$validated['destino']}%");
        }

        if ($request->filled('fechasalida')) {
            $query->where('vuelos.fecha_salida', '=', $validated['fechasalida']);
        }

        if ($request->filled('filtroprecio')) {
            $rango = explode('-', $validated['filtroprecio']);
            if (count($rango) === 2) {
                $query->whereBetween('vuelos.precio', [$rango[0], $rango[1]]);
            } elseif ($validated['filtroprecio'] === '8000') {
                $query->where('vuelos.precio', '>', 8000);
            }
        }

        if ($request->filled('duracion')) {
            $estadoMap = [
                'Directo' => 'disponible',
                '1 escala' => 'ocupado',
                '2 o más escalas' => 'cancelado',
            ];
            if (isset($estadoMap[$validated['duracion']])) {
                $query->where('vuelos.estado', '=', $estadoMap[$validated['duracion']]);
            }
        }

        // Obtener resultados
        $resultados = $query->get();

        return response()->json($resultados);
    }
    public function index()
    {
        $consultarVuelos = DB::table('vuelos')->get();
        return view('admin_vuelos', compact('consultarVuelos'));
    }
    public function destroy(string $id)
    {
        DB::table('vuelos')->where('id', $id)->delete();
        session()->flash('exito', 'El vuelo ha sido eliminado');
        return to_route('listarVuelos');
    }
}
