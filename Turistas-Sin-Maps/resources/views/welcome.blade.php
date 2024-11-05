@extends('layouts.plantilla')

@section('titulo', 'inicio')

@section('css-welcome')
<link rel="stylesheet" href="{{ asset('css/welcome.css') }}"> <!-- CSS específico para esta vista -->
@endsection

@section('contenidoInicio')
<section class="hero" style="background-image: url('{{ asset('img/INICIO.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100vw; height: 100vh;">
    <div class="hero-content">
        <h2>VUELOS Y HOTELES</h2>
        <h1>Bienvenido a tu lugar seguro, disfruta con nosotros.</h1>
        <div class="hero-buttons">
            <button type="button" onclick="window.location.href='{{ route('rutaLogin') }}'" class="btn btn-success btn-sm me-2 mb-2">
                Iniciar sesión
            </button>
            <button type="button" onclick="window.location.href='{{ route('rutaRegistro') }}'" class="btn btn-primary btn-sm me-2 mb-2">
                Registrarse
            </button>
        </div>
    </div>
</section>
@endsection
