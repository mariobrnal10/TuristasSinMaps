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

<style>
/* Colores de fondo personalizados para cada sección */
.hero-section {
    background-color: #1a1a2e; 
}

.destinos {
    background-color: #f4f4f4; 
    color: #333333; 
}

.porque-elegirnos {
    background-color: #eaeaea; 
    color: #2c2c2c; 
}

.testimonios {
    background-color: #f9f9f9; 
    color: #1a1a1a; 
}

.metodos-pago {
    background-color: #d1dce5; /
    color: #000000; 
}

</style>

<div class="hero-section container d-flex justify-content-center align-items-center h-80 py-5">
    <!-- Tarjeta: Hoteles -->
    <div class="col-md-3 mb-4">
        <div class="card text-center" style="background-color: rgba(255, 255, 255, 0.9); box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); border-radius: 10px;">
            <div class="card-body">
                <h5 class="card-title">Hoteles en Nuestra Página</h5>
                <p class="card-text">
                    Encuentra una gran variedad de hoteles a los mejores precios. Te ofrecemos opciones de alojamiento, desde hoteles de lujo hasta opciones económicas, siempre con garantía de servicio confiable y seguro.
                </p>
            </div>
        </div>
    </div>

    <!-- Tarjeta: Vuelos -->
    <div class="col-md-3 mb-4">
        <div class="card text-center" style="background-color: rgba(255, 255, 255, 0.9); box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); border-radius: 10px;">
            <div class="card-body">
                <h5 class="card-title">Vuelos en Nuestra Página</h5>
                <p class="card-text">
                    Reserva tus vuelos al mejor precio con nosotros. Te ofrecemos una amplia gama de aerolíneas y horarios para que encuentres el vuelo que más se acomode a tus necesidades. Viaja con tranquilidad.
                </p>
            </div>
        </div>
    </div>

    <!-- Tarjeta: Paquetes -->
    <div class="col-md-3 mb-4">
        <div class="card text-center" style="background-color: rgba(255, 255, 255, 0.9); box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); border-radius: 10px;">
            <div class="card-body">
                <h5 class="card-title">Paquetes de Viaje Completo</h5>
                <p class="card-text">
                    Explora nuestros paquetes de viaje que combinan vuelos, hoteles y experiencias. Diseñados para que disfrutes tus vacaciones sin preocupaciones, con todo organizado para tu comodidad.
                </p>
            </div>
        </div>
    </div>
</div>


<div class="destinos py-5">
    <h2 class="text-center mb-4">Destinos Populares desde <span style="color: #68C233;">Varias ciudades</span></h2>
    <div class="container d-flex flex-wrap justify-content-center">

        <div class="card mb-4" style="width: 22%; margin: 0 1%; border: none;">
            <img src="img/san-antonio.webp" alt="San Antonio" class="card-img-top" style="border-radius: 10px;">
            <div class="card-body text-center">
                <h5 class="card-title mb-2" style="font-weight: bold;">San Antonio</h5>
                <p class="card-text text-success" style="font-size: 1.2rem;">$1,897 MXN</p>
                <a href="#" class="btn btn-outline-success btn-sm">Reserva desde</a>
            </div>
        </div>
        <div class="card mb-4" style="width: 22%; margin: 0 1%; border: none;">
            <img src="img/h.jpg" alt="Houston" class="card-img-top" style="border-radius: 10px;">
            <div class="card-body text-center">
                <h5 class="card-title mb-2" style="font-weight: bold;">Houston</h5>
                <p class="card-text text-success" style="font-size: 1.2rem;">$1,720 MXN</p>
                <a href="#" class="btn btn-outline-success btn-sm">Reserva desde</a>
            </div>
        </div>
        <div class="card mb-4" style="width: 22%; margin: 0 1%; border: none;">
            <img src="img/monterrey.webp" alt="Monterrey" class="card-img-top" style="border-radius: 10px;">
            <div class="card-body text-center">
                <h5 class="card-title mb-2" style="font-weight: bold;">Monterrey</h5>
                <p class="card-text text-success" style="font-size: 1.2rem;">$29 MXN</p>
                <a href="#" class="btn btn-outline-success btn-sm">Reserva desde</a>
            </div>
        </div>
        <div class="card mb-4" style="width: 22%; margin: 0 1%; border: none;">
            <img src="img/loscabos.jpg" alt="Los Cabos" class="card-img-top" style="border-radius: 10px;">
            <div class="card-body text-center">
                <h5 class="card-title mb-2" style="font-weight: bold;">Los Cabos</h5>
                <p class="card-text text-success" style="font-size: 1.2rem;">$425 MXN</p>
                <a href="#" class="btn btn-outline-success btn-sm">Reserva desde</a>
            </div>
        </div>
    </div>
</div>



<div class="porque-elegirnos py-5">
    <h2 class="text-center mb-4">¿Por qué elegirnos?</h2>
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-4 text-center mb-4">
                <img src="img/servicio.png" alt="Calidad Garantizada" class="mb-3" style="width: 100px; height: 100px; object-fit: cover;">
                <h5 class="mt-2">Calidad Garantizada</h5>
                <p>Trabajamos con los mejores proveedores para garantizarte una experiencia inigualable.</p>
            </div>

            <div class="col-md-4 text-center mb-4">
                <img src="img/apoyo.png" alt="Atención al Cliente" class="mb-3" style="width: 100px; height: 100px; object-fit: cover;">
                <h5 class="mt-2">Atención al Cliente</h5>
                <p>Nuestro equipo está disponible 24/7 para resolver cualquier duda o problema que tengas.</p>
            </div>

            <div class="col-md-4 text-center mb-4">
                <img src="img/flexibilidad.png" alt="Flexibilidad" class="mb-3" style="width: 100px; height: 100px; object-fit: cover;">
                <h5 class="mt-2">Flexibilidad</h5>
                <p>Ofrecemos múltiples opciones de pago y personalización para adaptarnos a tus necesidades.</p>
            </div>
        </div>
    </div>
</div>


<div class="testimonios py-5 bg-light">
    <h2 class="text-center mb-4">Lo que dicen nuestros clientes</h2>
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-4 text-center mb-4">
                <img src="img/mujer1.jpg" alt="Cliente Ana López" class="rounded-circle mb-3" style="width: 80px; height: 80px; object-fit: cover;">
                <p class="text-muted">"El servicio es excelente, encontré el paquete perfecto para mi luna de miel. ¡Super recomendado!"</p>
                <h6 class="fw-bold">- Ana López</h6>
            </div>

            <div class="col-md-4 text-center mb-4">
                <img src="img/vato.jpg" alt="Cliente Carlos Martínez" class="rounded-circle mb-3" style="width: 80px; height: 80px; object-fit: cover;">
                <p class="text-muted">"La atención al cliente es excepcional, resolvieron mis dudas en minutos. Volveré a reservar con ellos."</p>
                <h6 class="fw-bold">- Carlos Martínez</h6>
            </div>

            <div class="col-md-4 text-center mb-4">
                <img src="img/mujer2.jpg" alt="Cliente Laura García" class="rounded-circle mb-3" style="width: 80px; height: 80px; object-fit: cover;">
                <p class="text-muted">"Me encantó la flexibilidad de pago y las ofertas que tienen. Excelente opción para viajar."</p>
                <h6 class="fw-bold">- Laura García</h6>
            </div>
        </div>
    </div>
</div>


<div class="metodos-pago py-5">
    <h3 class="text-center mb-4">Métodos de pago disponibles</h3>
    <div class="container p-4" style="background-color: #f9f9f9; border-radius: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">

        <ul class="nav nav-tabs justify-content-center mb-4" id="paymentTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="online-tab" data-bs-toggle="tab" data-bs-target="#online" type="button" role="tab" aria-controls="online" aria-selected="true">
                    Pagos en línea
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="cash-tab" data-bs-toggle="tab" data-bs-target="#cash" type="button" role="tab" aria-controls="cash" aria-selected="false">
                    Pagos en efectivo
                </button>
            </li>
        </ul>

<div class="tab-content" id="paymentTabsContent">

    <div class="tab-pane fade show active" id="online" role="tabpanel" aria-labelledby="online-tab">
        <div class="container">
            <div class="row justify-content-center">


                <div class="col-12 col-md-4 text-center mb-4">
                    <img src="img/master.png" alt="MasterCard" width="80">
                    <p class="mt-2">Débito y Crédito</p>
                </div>
                <div class="col-12 col-md-4 text-center mb-4">
                    <img src="img/visa1.png" alt="Visa" width="80">
                    <p class="mt-2">Débito y Crédito</p>
                </div>
                <div class="col-12 col-md-4 text-center mb-4">
                    <img src="img/amex.png" alt="AMEX" width="80">
                    <p class="mt-2">Crédito</p>
                </div>


                <div class="col-12 col-md-4 text-center mb-4">
                    <img src="img/h.png" alt="HSBC" width="80">
                    <p class="mt-2">Crédito</p>
                </div>
                <div class="col-12 col-md-4 text-center mb-4">
                    <img src="img/pay.png" alt="PayPal" width="80">
                    <p class="mt-2">Pago en línea</p>
                </div>
                <div class="col-12 col-md-4 text-center mb-4">
                    <img src="img/mer.webp" alt="Mercado Pago" width="60">
                    <p class="mt-2">Pago en línea</p>
                </div>

            </div>
        </div>



            <p class="text-center mt-4 text-muted">Pagos flexibles y seguros <i class="bi bi-lock"></i></p>
            <div class="tab-pane fade" id="cash" role="tabpanel" aria-labelledby="cash-tab">
                <div class="d-flex justify-content-center flex-wrap gap-3">
                    <div class="text-center">
                        <img src="img/oxxo.webp" alt="OXXO" width="80">
                        <p class="mt-2">Pago en efectivo</p>
                    </div>
                    <div class="text-center">
                        <img src="img/7-eleven.webp" alt="7-Eleven" width="80">
                        <p class="mt-2">Pago en efectivo</p>
                    </div>
                </div>
            </div>


    </div>



    <h4 class="text-center mb-3">Información para tu primer Viaje</h4>

<div class="text-center">
    <iframe width="80%" height="450" src="https://www.youtube.com/embed/MdJHfS57BII?si=0qZ_hrOaLI6N5vOm" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>


        <h4 class="mt-4 mb-3">Personaliza tu Viaje</h4>
        <div class="opciones d-flex flex-wrap justify-content-start gap-3">
            <div class="opcion p-2 bg-light rounded">Tarjetas HSBC Viva</div>
            <div class="opcion p-2 bg-light rounded">Eventos y conciertos</div>
            <div class="opcion p-2 bg-light rounded">Viva Paquetes</div>
        </div>
    </div>
</div>

@endsection
