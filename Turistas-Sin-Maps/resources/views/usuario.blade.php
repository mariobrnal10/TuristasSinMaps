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

    
        
    <div class="formulario-container">
        @session('cambio')
    <script>
        Swal.fire({
            title: "Muy Bien!",
            text: "Los Cambios Han sido Guardados!",
            icon: "success"
        });
    </script>    
    @endsession
        <h1>Perfil de Usuario</h1>
        <form action="/enviarCambios" method="POST">
            @csrf
        <div>
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}">
            <small class="fst-italic text-danger">{{$errors->first('nombre')}}</small>
        </div>
        <div>
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" name="apellido" value="{{old('apellido')}}">
            <small class="fst-italic text-danger">{{$errors->first('apellido')}}</small>
        </div>
        <div>
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" value="{{old('email')}}">
            <small class="fst-italic text-danger">{{$errors->first('email')}}</small>
        </div>
        <div>
            <label for="telefono" class="form-label">Telefono</label>
            <input type="text" class="form-control" name="telefono" value="{{old('telefono')}}">
            <small class="fst-italic text-danger">{{$errors->first('telefono')}}</small>
            <div>
                <label for="contraseña" class="form-label">Contraseña</label>
                <input type="text" class="form-control" name="contraseña" value="{{old('telefono')}}">
                <small class="fst-italic text-danger">{{$errors->first('contraseña')}}</small>
            </div>
        </div>
        <br>
        <div class="boton-actualizar">
            <button type="submit" class="btn btn-primary btn-sm">Guardar Cambios</button>
        </div>
        </form>
        

    </div>
</body>
@endsection