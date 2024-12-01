<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

class ControladorRecuperacion extends Controller
{
    /**
     * Mostrar el formulario para ingresar el email o teléfono.
     */
    public function mostrarFormulario()
    {
        return view('recuperar');
    }

    /**
     * Enviar código de recuperación al email o número de teléfono.
     */
    public function enviarCodigo(Request $request)
{
    $request->validate([
        'metodo' => 'required',
        'email' => 'required_if:metodo,email|email',
        'telefono' => 'required_if:metodo,sms|numeric|digits:10',
    ]);

    $codigo = random_int(100000, 999999);

    if ($request->metodo === 'email') {
        session([
            'recuperacion_email' => $request->input('email'),
            'codigo_verificacion' => $codigo,
        ]);

        Mail::raw("Tu código de recuperación es: $codigo", function ($message) use ($request) {
            $message->to($request->input('email'))->subject('Código de Recuperación');
        });
    } elseif ($request->metodo === 'sms') {
        session([
            'recuperacion_telefono' => $request->input('telefono'),
            'codigo_verificacion' => $codigo,
        ]);

        session()->flash('sms', 'Código enviado por SMS: ' . $codigo);
    }

    return redirect()->route('verificarCodigoRecuperacion')->with('success', 'Código de verificación enviado. Ingresa el código para continuar.');
}


    /**
     * Mostrar formulario para ingresar el código de verificación.
     */
    public function verificarCodigo(Request $request)
    {
        $request->validate([
            'codigo' => 'required|numeric|digits:6',
        ]);

        // Verificar que el código coincide
        if (session('codigo_verificacion') == $request->input('codigo')) {
            return redirect()->route('formNuevaContrasena')
                ->with('success', 'Código verificado. Ahora puedes establecer una nueva contraseña.');
        }

        return redirect()->back()->withErrors(['codigo' => 'El código ingresado es incorrecto.']);
    }

    /**
     * Mostrar formulario para actualizar la contraseña.
     */
    public function mostrarFormularioNuevaContrasena()
    {
        return view('nuevaContrasena');
    }

    /**
     * Actualizar la contraseña en la base de datos.
     */
    public function actualizarContrasena(Request $request)
    {
        $request->validate([
            'password' => 'required|min:8|confirmed',
        ]);

        // Determinar si el email o teléfono fue usado para recuperar
        $email = session('recuperacion_email');
        $telefono = session('recuperacion_telefono');

        // Actualizar contraseña basado en el método de recuperación
        $query = DB::table('usuarios');
        if ($email) {
            $query->where('email', $email);
        } elseif ($telefono) {
            $query->where('telefono', $telefono);
        }

        $query->update([
            'contraseña' => bcrypt($request->input('password')),
        ]);

        // Limpiar la sesión
        session()->forget(['recuperacion_email', 'recuperacion_telefono', 'codigo_verificacion']);

        return redirect()->route('rutaLogin')
            ->with('success', 'Contraseña actualizada exitosamente.');
    }
}
