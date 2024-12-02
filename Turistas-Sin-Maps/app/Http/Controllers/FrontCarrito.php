<?php

namespace App\Http\Controllers;
use apps\Models\carrito;

use Illuminate\Http\Request;

class FrontCarrito extends Controller
{
    public function index(){
        $carrito = carrito::all();
        return view('carrito', compact("carrito"));
    }
}
