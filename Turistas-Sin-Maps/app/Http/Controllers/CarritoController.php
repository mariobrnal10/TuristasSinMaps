<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarritoController extends Controller
{
    // Listar contenido del carrito
public function listarCarrito()
{
    $carrito = DB::table('carrito_reservacion')
        ->leftJoin('vuelos', 'carrito_reservacion.id_vuelo', '=', 'vuelos.id')
        ->leftJoin('hoteles', 'carrito_reservacion.id_hotel', '=', 'hoteles.id')
        ->select(
            'carrito_reservacion.*',
            'vuelos.origen as vuelo_origen',
            'vuelos.destino as vuelo_destino',
            'hoteles.nombre as hotel_nombre'
        )
        ->get();

    $total = $carrito->sum(function ($item) {
        return $item->precio_parcial * $item->cantidad;
    });

    return view('carrito', compact('carrito', 'total'));
}

// Actualizar cantidad en el carrito
public function actualizarCantidad(Request $request)
{
    DB::table('carrito_reservacion')
        ->where('id', $request->input('id'))
        ->update(['cantidad' => $request->input('cantidad')]);

    return response()->json(['success' => true]);
}
public function agregarVuelo(Request $request)
{
    DB::table('carrito_reservacion')->insert([
        'id_vuelo' => $request->input('id_vuelo'),
        'cantidad' => 1,
        'precio_parcial' => $request->input('precio'),
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return response()->json(['message' => 'Vuelo agregado al carrito.']);
}

public function agregarHotel(Request $request)
{
    DB::table('carrito_reservacion')->insert([
        'id_hotel' => $request->input('id_hotel'),
        'cantidad' => 1,
        'precio_parcial' => $request->input('precio'),
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return response()->json(['message' => 'Hotel agregado al carrito.']);
}


// Eliminar un elemento del carrito
public function eliminar(Request $request)
{
    DB::table('carrito_reservacion')->where('id', $request->input('id'))->delete();

    return response()->json(['success' => true]);
}

// Realizar el pago
public function pagar()
{
    $total = DB::table('carrito_reservacion')->sum(DB::raw('precio_parcial * cantidad'));
    DB::table('carrito_reservacion')->truncate(); // Limpiar el carrito

    return response()->json(['success' => true, 'total' => $total]);
}

}
