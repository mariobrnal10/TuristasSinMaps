@extends('layouts.plantilla2')

@section('titulo', 'Home')
    
@section('css-login')
    <link rel="stylesheet" href="{{asset('')}}">
@endsection

@section('contenidoHome')

@if(session('inicio'))
    <script>
        Swal.fire({
            title: "Inicio de Sesión Correcto!",
            text: "{{ session('inicio') }}",
            icon: "success"
        });
    </script>
@endif



<section class="hero" style="background-image: url('{{ asset('img/home.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100vw; height: 100vh;">
    
    <div class="container d-flex justify-content-center align-items-center h-100">
        <div class="row w-100 justify-content-around">

            <!-- Card para Hoteles -->
            <div class="col-md-3">
                <div class="card text-center" style="background-color: rgba(255, 255, 255, 0.9);">
                    <div class="card-body">
                        <h5 class="card-title">Hoteles en Nuestra Página</h5>
                        <p class="card-text">Encuentra una gran variedad de hoteles a los mejores precios. Te ofrecemos las mejores opciones de alojamiento, desde hoteles de lujo hasta opciones económicas, siempre con la garantía de un servicio confiable y seguro.</p>
                    </div>
                </div>
            </div>

            <!-- Card para Vuelos -->
            <div class="col-md-3">
                <div class="card text-center" style="background-color: rgba(255, 255, 255, 0.9);">
                    <div class="card-body">
                        <h5 class="card-title">Vuelos en Nuestra Página</h5>
                        <p class="card-text">Reserva tus vuelos al mejor precio con nosotros. Te ofrecemos una amplia gama de aerolíneas y horarios para que encuentres el vuelo que más se acomode a tus necesidades. Viaja con la tranquilidad de estar en manos de expertos.</p>
                    </div>
                </div>
            </div>

            <!-- Card para Paquetes de Viaje -->
            <div class="col-md-3">
                <div class="card text-center" style="background-color: rgba(255, 255, 255, 0.9);">
                    <div class="card-body">
                        <h5 class="card-title">Paquetes de Viaje Completo</h5>
                        <p class="card-text">Explora nuestras opciones de paquetes de viaje que combinan vuelos, hoteles y experiencias. Diseñados para que disfrutes de tus vacaciones sin preocupaciones, con todo organizado para tu comodidad y diversión.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
