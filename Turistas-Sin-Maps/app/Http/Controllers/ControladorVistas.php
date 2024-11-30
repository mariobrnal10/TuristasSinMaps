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
    public function usuario(){
        return view('usuario');
    }
    public function vuelos(){
        return view('vuelos');
    }
    public function busqueda_vuelos(){
        return view('busqueda_vuelos');
    }
    public function busqueda_hoteles(){
        return view('busqueda_hoteles');
    }
    public function confirmar_compra(){
        return view('confirmar_compra');
    }
    public function cancelar(){
        return view('cancelacion');
    }
    public function serviciosAdmin(){
        return view('admin_servicios');
    }
    public function serviciosUsuario(){
        return view('admin_usuario');
    }
    public function tarifas(){
        return view('terminos');
    }
    public function admin_vuelos(){
        return view('admin_vuelos');
    }
    public function admin_hoteles(){
        return view('admin_hoteles');
    }
    public function admin_agregar(){
        return view('agregar_admin');
    }
    public function admin_nuevo(){
        return view('formulario_administracion');
    }
    public function terminos(){
        return view('terminos_condiciones');
    }
    
}
