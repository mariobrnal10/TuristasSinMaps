@extends('layouts.plantilla2')
@section('titulo', 'Usuario')

@section('contenidoUsuario')

<style>
    .formulario-container{
        background-color: rgba(208, 210, 210, 0.321);
        padding: 20px;
        border-radius: 8px;
        width: 600px;
        text-align: center;
    }
</style>

<body>
    <section class="hero" style="background-image: url('{{ asset('img/INICIO.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100vw; height: 100vh;">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}"> 

    <center>
        
    <div class="formulario-container">
        <h1>Perfil de Usuario</h1>
        <form action="">
        <div>
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre">
        </div>
        <div>
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" name="apellido">
        </div>
        <div>
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email">
        </div>
        <div>
            <label for="telefono" class="form-label">Telefono</label>
            <input type="text" class="form-control" name="telefono">
        </div>
        <br>
        <div class="boton-actualizar">
            <button type="submit" class="btn btn-succes btn-sm">Guardar Cambios</button>
            <button type="submit" class="btn btn-succes btn-sm">Actualizar Contraseña</button>
        </div>
        </form>
        

    </div>
    </center>
</body>
@endsection