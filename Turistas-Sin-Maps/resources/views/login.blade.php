@extends('layouts.plantilla')

@section('titulo', 'Login')

@section('css-login')
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection

@section('contenidoLogin')


<div class="login-container" style="background-image: url('{{ asset('img/viaje.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100vw; height: 75vh;">
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
        <h2 class="text-center mb-4 font-weight-bold text-dark">Iniciar Sesión</h2>
    
        <div class="text-center mb-4">
            <img src="img/avatar.png" alt="Logo" class="img-fluid rounded-circle shadow" style="max-width: 90px;">
        </div>
    
        <div class="form-group mb-3">
            <label for="email" class="form-label text-dark font-weight-semibold">Correo Electrónico</label>
            <input type="email" class="form-control form-control-lg shadow-sm" name="email" id="email" value="{{ old('email') }}" required>
            <small class="fst-italic text-danger">{{ $errors->first('email') }}</small>
        </div>
    
        <div class="form-group mb-3">
            <label for="password" class="form-label text-dark font-weight-semibold">Contraseña</label>
            <input type="password" class="form-control form-control-lg shadow-sm" name="password" id="password" value="{{ old('password') }}" required>
            <small class="fst-italic text-danger">{{ $errors->first('password') }}</small>
        </div>
    
        <button type="submit" class="btn btn-primary btn-block w-100 py-3 rounded-pill shadow-sm">
            Iniciar Sesión
        </button>
    
        <!-- Enlace para recuperar contraseña -->
        <div class="text-center mt-3">
            <a href="{{route('rutaRecuperarContrasena')}}" class="text-decoration-none text-primary">¿Olvidaste tu contraseña?</a>
        </div>
    </form>
    
</div>

@endsection