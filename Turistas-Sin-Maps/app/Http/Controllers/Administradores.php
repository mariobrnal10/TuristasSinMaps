<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\validador;
use carbon\carbon;

class Administradores extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultarAdmins = DB::table('administradores')->get();
        return view('agregar_admin', compact('consultarAdmins'));
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
        // Inserta los datos directamente en la tabla de administradores
        DB::table('administradores')->insert([
            'nombre' => $request->input('nombre'),
            'apelido' => $request->input('apellido'),
            'correo' => $request->input('correo'),
            'contraseña' => ($request->input('contraseña')),

        ]);
    
        // Redirige a la vista de listar administradores con un mensaje de éxito
        session()->flash('exito', 'El administrador ha sido registrado exitosamente.');
        return redirect()->route('listarAdmins');
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
        // Validar los datos enviados desde el formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'correo' => 'required|email|max:255',
            'contraseña' => 'nullable|string|min:6', // La contraseña puede ser opcional
        ]);
    
        // Verificar si el registro existe
        $administrador = DB::table('administradores')->where('id', $id)->first();
        if (!$administrador) {
            return redirect()->back()->withErrors(['error' => 'El administrador no existe.']);
        }
    
        // Actualizar el registro en la tabla administradores
        DB::table('administradores')->where('id', $id)->update([
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'), // Corrige el typo "apelido" -> "apellido"
            'correo' => $request->input('correo'),
            // Si no se envía contraseña, se mantiene la actual
            'contraseña' => $request->filled('contraseña') ? bcrypt($request->input('contraseña')) : $administrador->contraseña,
            'updated_at' => now(), // Asegúrate de que exista el campo updated_at en la tabla
        ]);
    
        // Redirigir con mensaje de éxito
        session()->flash('exito', 'El administrador se ha actualizado correctamente.');
        return redirect()->route('listarAdmins'); // Redirige a la lista de administradores
    }
    
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('administradores')->where('id', $id)->delete();
        session()->flash('exito', 'El administrador ha sido eliminado');
        return to_route('listarAdmins');
    }
    
}