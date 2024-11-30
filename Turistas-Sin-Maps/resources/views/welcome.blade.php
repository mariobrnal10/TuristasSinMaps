@extends('layouts.plantilla')

@section('titulo', 'inicio')

@section('css-welcome')
<link rel="stylesheet" href="{{ asset('css/welcome.css') }}"> <!-- CSS específico para esta vista -->
@endsection

@section('contenidoInicio')
<section id="hero" class="hero" style="background-image: url('{{ asset('img/avion2.webp') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100vw; height: 70vh; position: relative; transition: background-image 1s ease-in-out;">
    <div class="hero-content" style="position: absolute; top: 40%; left: 5%; transform: translateY(-50%); background-color: rgba(255, 255, 255, 0.9); padding: 30px 50px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); width: 90%; text-align: left;">
        <h2 style="color: #333; font-size: 24px; font-weight: bold; margin-bottom: 10px; text-align: center;">VUELOS Y HOTELES</h2>
        <h1 style="color: #555; font-size: 18px; font-weight: normal; margin-bottom: 20px; text-align: center;">Bienvenido a tu lugar seguro, disfruta con nosotros.</h1>

        <div class="hero-buttons">
            <button type="button" onclick="window.location.href='{{ route('rutaLogin') }}'" class="btn btn-success btn-sm me-2 mb-2">
                Iniciar sesión
            </button>
            <button type="button" onclick="window.location.href='{{ route('rutaRegistro') }}'" class="btn btn-primary btn-sm me-2 mb-2">
                Registrarse
            </button>
        </div>
    </div>

    <button id="prevButton" class="nav-button left" onclick="changeBackgroundImage(-1)" style="position: absolute; top: 50%; left: 20px; transform: translateY(-50%); background-color: rgba(0,0,0,0.5); color: white; border: none; padding: 10px; border-radius: 50%; cursor: pointer;">&lt;</button>
    <button id="nextButton" class="nav-button right" onclick="changeBackgroundImage(1)" style="position: absolute; top: 50%; right: 20px; transform: translateY(-50%); background-color: rgba(0,0,0,0.5); color: white; border: none; padding: 10px; border-radius: 50%; cursor: pointer;">&gt;</button>
</section>

<script>
    const images = [
        '{{ asset('img/avion2.webp') }}',
        '{{ asset('img/cabaña.jpg') }}',
        '{{ asset('img/lago.jpg') }}',
    ];

    let currentIndex = 0;
    const heroSection = document.getElementById('hero');

    function changeBackgroundImage(direction) {
        currentIndex = (currentIndex + direction + images.length) % images.length;
        heroSection.style.backgroundImage = `url(${images[currentIndex]})`;
    }

    setInterval(() => changeBackgroundImage(1), 5000); // Cambia la imagen cada 5 segundos
</script>
@endsection


