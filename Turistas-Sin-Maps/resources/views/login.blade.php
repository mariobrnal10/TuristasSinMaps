@extends('layouts.plantilla')

@section('titulo', 'Login')

@section('css-login')
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection

@section('contenidoLogin')
<div class="login-container" style="background-image: url('{{ asset('img/INICIO.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100vw; height: 100vh;">
    <form action="{{ route('rutaLogin') }}" method="POST">
        @csrf
        <h2>Iniciar Sesión</h2>
        <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Iniciar Sesión</button>
    </form>
</div>

@endsection