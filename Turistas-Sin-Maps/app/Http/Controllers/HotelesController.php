<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Validador;

use Illuminate\Support\Facades\DB;

class HotelesController extends Controller
{
    public function buscarHoteles(Request $request)
    {
        $destino = $request->input('destino');
        $precio = $request->input('filtroprecio');
        $estrellas = $request->input('estrellas');

        $query = DB::table('hoteles')
            ->join('categorias_hoteles', 'hoteles.id_categoria', '=', 'categorias_hoteles.id')
            ->select('hoteles.*', 'categorias_hoteles.nombre_categoria');

        if ($destino) {
            $query->whereRaw('LOWER(hoteles.zona) LIKE ?', ['%' . strtolower($destino) . '%']);
        }

        if ($precio) {
            if ($precio === 'Entre 1200 a 2500') {
                $query->whereBetween('hoteles.precio_noche', [1200, 2500]);
            } elseif ($precio === 'Entre 2500 a 3500') {
                $query->whereBetween('hoteles.precio_noche', [2500, 3500]);
            } elseif ($precio === 'Mayor a 3500') {
                $query->where('hoteles.precio_noche', '>', 3500);
            }
        }

        if ($estrellas) {
            if ($estrellas === '1 a 3 estrellas') {
                $query->where(function ($q) {
                    $q->where('categorias_hoteles.nombre_categoria', 'LIKE', '1 Estrella')
                      ->orWhere('categorias_hoteles.nombre_categoria', 'LIKE', '2 Estrellas')
                      ->orWhere('categorias_hoteles.nombre_categoria', 'LIKE', '3 Estrellas');
                });
            } elseif ($estrellas === '4 a 5 estrellas') {
                $query->where(function ($q) {
                    $q->where('categorias_hoteles.nombre_categoria', 'LIKE', '4 Estrellas')
                      ->orWhere('categorias_hoteles.nombre_categoria', 'LIKE', '5 Estrellas');
                });
            } elseif ($estrellas === 'Calidad Diamante') {
                $query->where('categorias_hoteles.nombre_categoria', 'LIKE', 'Calidad Diamante');
            }
        }

        $resultados = $query->get();

        return response()->json($resultados);
    }
    public function index()
{
    $consultarHoteles = DB::table('hoteles')->get();
    return view('admin_hoteles', compact('consultarHoteles'));
}

public function destroy(string $id)
{
    DB::table('hoteles')->where('id', $id)->delete();
    session()->flash('exito', 'El hotel ha sido eliminado');
    return to_route('listarHoteles');
}
public function store(Validador $request)
{
    // Inserta los datos directamente en la tabla de administradores
    DB::table('hoteles')->insert([
        'nombre' => $request->input('nombre'),
        'zona' => $request->input('zona'),
        'num_habitaciones' => $request->input('habitaciones'),
        'habitaciones_disponibles' => ($request->input('habitaciones_disp')),
        'id_categoria' => $request->input('categoria'),
        'precio_noche' => $request->input('tarifa'),



    ]);

    // Redirige a la vista de listar administradores con un mensaje de éxito
    session()->flash('exito', 'El hotel ha sido registrado exitosamente.');
    return redirect()->route('listarHoteles');
}
}
