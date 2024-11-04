@extends('layouts.plantilla2')
@section('titulo', 'Vuelos')

@section('contenidoVuelos')

<style>
    .vuelos-container{
        background-color: rgba(208, 210, 210, 0.321);
        padding: ;
        border-radius: auto;
        width: auto;
        text-align: center;
        align-items: center;
        display: flex;
        gap: 20px;
    }

    .imagen-vuelos{
        width: 500px;
        height: auto;
    }
    .hero {
        margin: 0;
        padding: 0;
        width: 100vw;
        height: 100vh;
        position: relative; 
        background-image: url('{{ asset('img/INICIO.jpg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
    .vuelos-inicio {
        position: absolute;
        top: 10%; 
        left: 50%;
        transform: translateX(-50%);
        color: #ffffff;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7); 
    }
    .vuelos-inicio h1 {
        font-size: 4em; 
        margin: 0;
    }
    .vuelos-inicio p {
        font-size: 1.5em;
        margin: 0;
    }
    .titulo-vuelo{
        margin-bottom: 30px;
        font-size: 54px;
    }

</style>

<body>
    <section class="hero" style="background-image: url('{{ asset('img/INICIO.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100vw; height: 100vh;">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}"> 

    <center>
        
    <div class="vuelos-inicio">
        <div class="d-flex flex-column justify-content-center align-items-center text-center full-height">
            <h1 class="display-1">Conoce nuestros vuelos</h1>
            <p>Selecciona tu proxima aventura!</p>
        </div>
        

    </div>
    </center>
    <div class="vuelos-container">
        <img class="imagen-vuelos" src="/img/yucatan.jpg" alt="Third slide">
        <div class="titulo-vuelo">
            <h2>Vuelo a la mejor hotel en Yucatan</h2>
            <br>
            <h4>Conoce la experiencia de XCARET, uno de los mejores hoteles del mundo para planes familiares o con parejas.</h4>
        </div>
    </div>

 
</body>
@endsection