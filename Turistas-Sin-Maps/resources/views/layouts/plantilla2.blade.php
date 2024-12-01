<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    @vite(['resources/js/app.js'])
    @yield('css-carrito')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>
<body>
<nav class="navbar navbar-expand-lg bg-light shadow py-1">
    <div class="container-fluid p-0">

        <!-- Logo y Marca -->
        <a class="navbar-brand d-flex flex-column align-items-center text-center ms-0" href="{{route('rutaInicio')}}">
            <img src="{{ asset('img/1.png') }}" alt="Logo" style="width: 50px; height: 50px;" class="mb-1">
            <span class="fw-bold text-primary" style="font-size: 1.25rem;">Turistas Sin Maps</span>
        </a>

        <!-- Botón Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Contenido de Navegación -->
        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">

                <!-- Enlace Home -->
                <li class="nav-item mx-3">
                    <a class="nav-link d-flex flex-column align-items-center text-center {{ request()->routeIs('rutaHome') ? 'active' : '' }}" href="{{route('rutaHome')}}">
                        <img src="{{ asset('img/2.png') }}" alt="Home Icon" style="width: 40px; height: 40px;" class="mb-1">
                        <span class="text-dark fw-semibold">Home</span>
                    </a>
                </li>

                <!-- Enlace Hoteles -->
                <li class="nav-item mx-3">
                    <a class="nav-link d-flex flex-column align-items-center text-center {{ request()->routeIs('rutaHoteles') ? 'active' : '' }}" href="{{route('rutaHoteles')}}">
                        <img src="{{ asset('img/5.png') }}" alt="Hoteles Icon" style="width: 40px; height: 40px;" class="mb-1">
                        <span class="text-dark fw-semibold">Hoteles</span>
                    </a>
                </li>

                <!-- Enlace Vuelos -->
                <li class="nav-item mx-3">
                    <a class="nav-link d-flex flex-column align-items-center text-center {{ request()->routeIs('rutaBVuelos') ? 'active' : '' }}" href="{{route('rutaBVuelos')}}">
                        <img src="{{ asset('img/6.png') }}" alt="Vuelos Icon" style="width: 40px; height: 40px;" class="mb-1">
                        <span class="text-dark fw-semibold">Vuelos</span>
                    </a>
                </li>

                <!-- Enlace Carrito -->
                <li class="nav-item mx-3">
                    <a class="nav-link d-flex flex-column align-items-center text-center {{ request()->routeIs('rutaCarrito') ? 'active' : '' }}" href="{{route('rutaCarrito')}}">
                        <img src="{{ asset('img/7.png') }}" alt="Carrito Icon" style="width: 40px; height: 40px;" class="mb-1">
                        <span class="text-dark fw-semibold">Carrito</span>
                    </a>
                </li>

                <!-- Enlace Cancelación -->
                <li class="nav-item mx-3">
                    <a class="nav-link d-flex flex-column align-items-center text-center {{ request()->routeIs('rutaCancelar') ? 'active' : '' }}" href="{{route('rutaCancelar')}}">
                        <img src="{{ asset('img/8.png') }}" alt="Cancelación Icon" style="width: 40px; height: 40px;" class="mb-1">
                        <span class="text-dark fw-semibold">Cancelación</span>
                    </a>
                </li>

                <!-- Enlace Perfil -->
                <li class="nav-item mx-3">
                    <a class="nav-link d-flex flex-column align-items-center text-center {{ request()->routeIs('rutaUsuario') ? 'active' : '' }}" href="{{route('rutaUsuario')}}">
                        <img src="{{ asset('img/9.png') }}" alt="Perfil Icon" style="width: 40px; height: 40px;" class="mb-1">
                        <span class="text-dark fw-semibold">Perfil</span>
                    </a>
                </li>
            </ul>

            <!-- Barra de Búsqueda -->
            <form class="d-flex ms-0" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
                <button class="btn btn-primary" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>


    <div class="content">
        @yield('contenidoHome')
    </div>
    <div class="content">
        @yield('contenidoCarrito')
    </div>
    <div class="content">
      @yield('contenidoUsuario')
    </div>
    <div class="content">
      @yield('contenidoVuelos')
    </div>
    <div class="content">
      @yield("busquedaVuelos")
    </div>
    <div class="content">
      @yield("busquedaHoteles")
    </div>
    <div class="content">
      @yield("compra")
    </div>
    <div class="content">
      @yield("cancelar")
    </div>
    <div class="content">
      @yield("serviciosAdmin")
    </div>
    <div class="content">
      @yield("serviciosUsuario")
    </div>
    <div class="content">
      @yield("tarifas")
    </div>

<footer style="background-color: #f8f9fa; padding: 20px; text-align: center; border-top: 1px solid #e7e7e7;">
    <p style="margin: 0; color: #6c757d; font-size: 14px;">
        &copy; 2024 Tusita Sin Maps. Todos los derechos reservados.
    </p>
    <p style="margin: 5px 0 0;">
        <a href="#" style="color: #007bff; text-decoration: none; margin: 0 10px;">Política de privacidad</a>
        <a href="#" style="color: #007bff; text-decoration: none; margin: 0 10px;">Términos de uso</a>
        <a href="#" style="color: #007bff; text-decoration: none; margin: 0 10px;">Contacto</a>
    </p>
</footer>
    
</body>
</html>