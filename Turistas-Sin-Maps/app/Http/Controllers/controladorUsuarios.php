<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Validador;
use Illuminate\Support\Facades\Mail;

class controladorUsuarios extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('registrar');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Validador $request)
    {
        // Generar un código de verificación aleatorio de 6 dígitos
        $codigo = random_int(100000, 999999);

        // Guardar los datos en la sesión temporalmente
        session([
            'usuario' => [
                'nombre' => $request->input('nombre'),
                'apellido' => $request->input('apellido'),
                'email' => $request->input('email'),
                'telefono' => $request->input('telefono'),
                'contraseña' => bcrypt($request->input('contraseña')),
                'id_rol' => 2, // Asignar rol predeterminado "user"
            ],
            'codigo_verificacion' => $codigo, // Guardar el código en la sesión
        ]);

        // Enviar el correo con el código de verificación
        $this->enviarCodigo($request->input('email'), $codigo);

        // Redirigir a la vista de verificación
        return to_route('rutaVerificacion')
    ->with('email', $request->input('email')); // Pasar el email a la vista

    }

    // Método para enviar el correo electrónico
    protected function enviarCodigo($email, $codigo)
    {
        Mail::raw("Tu código de verificación es: $codigo", function ($message) use ($email) {
            $message->to($email)
                ->subject('Código de Verificación');
        });
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function verificarCodigo(Request $request)
{
    // Validar que el código ingresado es numérico y tiene 6 dígitos
    $request->validate([
        'codigo' => 'required|numeric|digits:6',
    ]);

    // Verificar que el código en la sesión coincide con el ingresado
    if (session('codigo_verificacion') == $request->input('codigo')) {
        // Capturar el nombre del usuario antes de limpiar la sesión
        $usuario = session('usuario.nombre');

        // Guardar al usuario en la base de datos
        DB::table('usuarios')->insert([
            'nombre' => session('usuario.nombre'),
            'apellido' => session('usuario.apellido'),
            'email' => session('usuario.email'),
            'telefono' => session('usuario.telefono'),
            'contraseña' => session('usuario.contraseña'),
            'id_rol' => session('usuario.id_rol'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Limpiar la sesión
        session()->forget(['usuario', 'codigo_verificacion']);

        // Establecer un mensaje de éxito en la sesión
        session()->flash('exito', 'Se guardó el usuario: ' . $usuario);

        // Redirigir al login con un mensaje de éxito
        return redirect()->route('rutaLogin');
    }

    // Si el código es incorrecto, regresar a la vista de verificación con un error
    return redirect()->back()->withErrors(['codigo' => 'El código ingresado es incorrecto.']);
}
public function listar()
{
    $consultarUsuarios = DB::table('usuarios')->get();
    return view('admin_usuario', compact('consultarUsuarios'));
}


}
