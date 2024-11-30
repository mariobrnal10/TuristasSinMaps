@extends('layouts.plantilla2')

@section('titulo', 'Home')

@section('css-login')
    <link rel="stylesheet" href="{{ asset('') }}">
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
<!-- img/home.jpg -->
<!-- Sección Hero -->
<section class="hero">
    <div id="carouselHero" class="carousel slide" data-bs-ride="carousel" style="max-height: 600px; overflow: hidden;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/aeropuerto.jpg') }}" class="d-block w-100" alt="Viajes" style="object-fit: cover;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Explora el mundo con nosotros</h5>
                    <p>Reserva vuelos y hoteles al mejor precio.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/lentes.jpg') }}" class="d-block w-100" alt="Paquetes de viaje" style="object-fit: cover;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Paquetes de viaje increíbles</h5>
                    <p>Todo lo que necesitas en un solo lugar.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselHero" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselHero" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
</section>


<section class="destinos py-5">
    <div class="container">
        <h2 class="text-center mb-4">Destinos Populares</h2>
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('img/destino1.jpg') }}" class="img-fluid rounded" alt="Cancún">
                <h5 class="mt-2">Cancún</h5>
                <p>Disfruta de playas paradisíacas y vida nocturna vibrante.</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('img/destino2.jpg') }}" class="img-fluid rounded" alt="París">
                <h5 class="mt-2">París</h5>
                <p>La ciudad del amor te espera con su encanto y cultura.</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('img/destino3.jpg') }}" class="img-fluid rounded" alt="Tokio">
                <h5 class="mt-2">Tokio</h5>
                <p>Una mezcla perfecta de tradición y modernidad.</p>
            </div>
        </div>
    </div>
</section>


<!-- Sección de Beneficios -->
<section class="beneficios py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Por Qué Elegirnos</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <i class="fas fa-plane fa-2x mb-2"></i>
                <h5>Variedad de opciones</h5>
                <p>Más de 500 destinos para explorar.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-hand-holding-usd fa-2x mb-2"></i>
                <h5>Precios competitivos</h5>
                <p>Obtén las mejores tarifas del mercado.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-users fa-2x mb-2"></i>
                <h5>Soporte 24/7</h5>
                <p>Asistencia en cualquier momento del día.</p>
            </div>
        </div>
    </div>
</section>

<!-- Sección de Opiniones -->
<section class="opiniones py-5">
    <div class="container">
        <h2 class="text-center mb-4">Lo Que Dicen Nuestros Clientes</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <p>"Excelente servicio, todo salió perfecto en mi viaje a Cancún."</p>
                        <small class="text-muted">- Juan Pérez</small>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <p>"Encontré el vuelo más barato y cómodo gracias a esta página."</p>
                        <small class="text-muted">- Ana García</small>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <p>"La atención al cliente es de primera, resolvieron todas mis dudas."</p>
                        <small class="text-muted">- Luis Martínez</small>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>
<div class="col-md-4" data-aos="fade-up" data-aos-duration="1000">
    <img src="{{ asset('img/mazatlan.jpg') }}" class="img-fluid rounded" alt="Cancún">
    <h5 class="mt-2">Cancún</h5>
    <p>Disfruta de playas paradisíacas y vida nocturna vibrante.</p>
</div>


<div class="col-md-4" data-aos="fade-up" data-aos-duration="1000">
    <img src="{{ asset('img/home.jpg') }}" class="img-fluid rounded" alt="Cancún">
    <h5 class="mt-2">Cancún</h5>
    <p>Disfruta de playas paradisíacas y vida nocturna vibrante.</p>
</div>


<!-- Información Adicional -->
<section class="informacion-adicional py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Información Importante</h2>
        <p class="text-center">Consulta nuestras <a href="#">Políticas de Reservación</a> y <a href="#">Preguntas Frecuentes</a> para una experiencia sin contratiempos.</p>
    </div>
</section>

@endsection
