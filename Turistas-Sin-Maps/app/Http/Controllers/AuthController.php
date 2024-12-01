<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidadorLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login(ValidadorLogin $request)
    {
        

        // Intentar autenticar al usuario
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Obtener al usuario autenticado
            $user = Auth::user();

            // Redirigir según el rol del usuario
            if ($user->id_rol == 2) {
                return redirect()->route('rutaHome')->with('inicio', 'Que Tenga una Buena Experiencia!!');
            } elseif ($user->id_rol == 1) {
                return redirect()->route('rutaSerAdm')->with('inicio', 'Bienvenido Administrador!');
            }
        }

        // Si falla la autenticación
        return redirect()->back()->withErrors(['email' => 'Las credenciales no coinciden con nuestros registros.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('rutaLogin');
    }
}

