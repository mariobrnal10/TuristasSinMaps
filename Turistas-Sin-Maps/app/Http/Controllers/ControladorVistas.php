<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVistas extends Controller
{
    public function inicio(){
        return view('welcome');
    }

    public function login(){
        return view('login');
    }

    public function registro(){
        return view('registrar');
    }

    public function home(){
        return view('home');
    }

    public function carrito(){
        return view('carrito');
    }
}
