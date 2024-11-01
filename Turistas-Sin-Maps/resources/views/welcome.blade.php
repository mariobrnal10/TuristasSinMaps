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
            <button type="button" onclick="window.location.href='{{ route('rutaLogin') }}'" class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                Iniciar sesión
            </button>
            <button type="button" onclick="window.location.href='{{ route('rutaRegistro') }}'" class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                Registrarse
            </button>
            
        </div>
    </div>
</section>

    
@endsection