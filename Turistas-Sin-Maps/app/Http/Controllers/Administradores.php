<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\validadorPerfil;
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
    public function store(validadorPerfil $request)
    {
        Db::table('administradores')->insert([
            'nombre' => $request->input('nombre'),
            'apelido' => $request->input('apellido'),
            'correo' => $request->input('correo'),
            'contraseña' => $request->input('contraseña'),

        ]);

        $usuario = $request->input('nombre');
        session()->flash('exito', 'Se guardo el usuario: '.$usuario);
            return to_route('listarAdmins');
    
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
        $admin = DB::table('administradores')->where('id',$id)->first();
        session()->flash('exito','El admin ha sido eliminado');
        return to_route('listarAdmins');
    }
}
