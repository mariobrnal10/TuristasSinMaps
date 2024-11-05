<?php

namespace App\Http\Controllers;

use App\Http\Requests\Validador;
use App\Http\Requests\ValidadorLogin;
use Illuminate\Http\Request;

class controladorForms extends Controller
{
    public function Registro(Validador $registro){
        $correo = $registro->input('correo');
        session()->flash('exito', 'Se ha guardado de manera correcta el correo: '.$correo);
        return to_route('rutaLogin');

    }

    public function InicioSesion(ValidadorLogin $inicioSesion) {
        $email = $inicioSesion->input('email');
        session()->flash('inicio', 'Inicio de Sesión Correcto. ' . $email);
        return to_route('rutaHome'); 
    }
    
    

}

