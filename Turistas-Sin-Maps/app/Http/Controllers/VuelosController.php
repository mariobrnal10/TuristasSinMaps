<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VuelosController extends Controller
{
    public function buscarVuelos(Request $request)
{
    // Obtener filtros del formulario
    $origen = $request->input('origen');
    $destino = $request->input('destino');
    $fecha_salida = $request->input('fechasalida');
    $fecha_regreso = $request->input('fecharegreso');
    $precio = $request->input('filtroprecio');
    $duracion = $request->input('duracion');
    
    // Construir la consulta
    $query = DB::table('vuelos')
        ->join('aerolineas', 'vuelos.id_aerolinea', '=', 'aerolineas.id')
        ->join('clases_vuelos', 'vuelos.id_clase', '=', 'clases_vuelos.id')
        ->select(
            'vuelos.*',
            'aerolineas.nombre as aerolinea',
            'clases_vuelos.nombre_clase'
        );
    
    if ($origen) {
        $query->where('vuelos.origen', 'LIKE', "%$origen%");
    }
    
    if ($destino) {
        $query->where('vuelos.destino', 'LIKE', "%$destino%");
    }
    
    if ($fecha_salida) {
        $query->where('vuelos.fecha_salida', '=', $fecha_salida);
    }
    
    if ($precio) {
        $rango = explode('-', $precio);
        if (count($rango) === 2) {
            $query->whereBetween('vuelos.precio', [$rango[0], $rango[1]]);
        } elseif ($precio === '8000') {
            $query->where('vuelos.precio', '>', 8000);
        }
    }
    
    if ($duracion) {
        if ($duracion === 'Directo') {
            $query->where('vuelos.estado', '=', 'disponible');
        } elseif ($duracion === '1 escala') {
            $query->where('vuelos.estado', '=', 'ocupado');
        } elseif ($duracion === '2 o más escalas') {
            $query->where('vuelos.estado', '=', 'cancelado');
        }
    }
    
    // Obtener resultados
    $resultados = $query->get();
    
    // Si la solicitud es AJAX (fetch), devolver resultados como JSON
    if ($request->ajax()) {
        return response()->json($resultados);
    }

    // Si no es una solicitud AJAX, devolver la vista
    return view('busqueda_vuelos', compact('resultados'));
}

    
}
