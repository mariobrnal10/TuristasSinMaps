@extends('layouts.plantilla')

@section('titulo', 'Login')

@section('css-login')
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection

@section('contenidoLogin')


<div class="login-container" style="background-image: url('{{ asset('img/INICIO.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100vw; height: 100vh;">
    @if(session('exito'))
    <script>
        Swal.fire({
            title: "Registro exitoso!",
            text: "{{ session('exito') }}",
            icon: "success"
        });
    </script>
@endif
@session('inicio')
    <script>
        Swal.fire({
            title: "Registro exitoso!",
            text: "Que Tenga una Buena Experiencia!",
            icon: "success"
        });
    </script>    
    @endsession
    <form action="/inicioSesion" method="POST">
        @csrf
        <h2>Iniciar Sesión</h2>
        <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input type="email"  name="email" value="{{old('email')}}">
            <small class="fst-italic text-danger">{{$errors->first('email')}}</small>
        </div>
        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="txt"  name="password" value="{{old('password')}}">
            <small class="fst-italic text-danger">{{$errors->first('password')}}</small>
        </div>
        <button type="submit" class="btn btn-primary btn-sm px-4 py-2">
            Iniciar Sesión
        </button>        
    </form>
</div>

@endsection