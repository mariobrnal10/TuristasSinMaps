<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    @vite(['resources/js/app.js'])
    @yield('css-welcome')
    @yield('css-login')
    @yield('css-registrar')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    

</head>
<body>
<nav class="navbar navbar-expand-lg bg-light shadow py-1">
    <div class="container-fluid p-0">

        <a class="navbar-brand d-flex flex-column align-items-center text-center ms-0" href="{{route('rutaInicio')}}">
            <img src="{{ asset('img/1.png') }}" alt="Logo" style="width: 50px; height: 50px;" class="mb-1">
            <span class="fw-bold text-primary" style="font-size: 1.25rem;">Turistas Sin Maps</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">

                <li class="nav-item mx-3">
                    <a class="nav-link d-flex flex-column align-items-center text-center" href="{{route('rutaInicio')}}">
                        <img src="{{ asset('img/2.png') }}" alt="Home Icon" style="width: 40px; height: 40px;" class="mb-1">
                        <span class="text-dark fw-semibold">Home</span>
                    </a>
                </li>

                <li class="nav-item mx-3">
                    <a class="nav-link d-flex flex-column align-items-center text-center" href="{{route('rutaContacto')}}">
                        <img src="{{ asset('img/3.png') }}" alt="Contacto Icon" style="width: 40px; height: 40px;" class="mb-1">
                        <span class="text-dark fw-semibold">Contacto</span>
                    </a>
                </li>

                <li class="nav-item mx-3">
                    <a class="nav-link d-flex flex-column align-items-center text-center" href="{{route('rutaTerminos')}}">
                        <img src="{{ asset('img/4.png') }}" alt="Política Icon" style="width: 40px; height: 40px;" class="mb-1">
                        <span class="text-dark fw-semibold">Términos y Condiciones</span>
                    </a>
                </li>
            </ul>

            <form class="d-flex ms-0" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
                <button class="btn btn-primary" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>


    <div class="content">
        @yield('contenidoInicio')
    </div>

    <div class="content">
        @yield('contenidoLogin')

    </div>
    <div class="content">
        @yield('contenidoRegistro')
    </div>
    <div class="content">
        @yield('contenidoTerminos')
    </div>

    <!-- Footer -->
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

    <!-- Flowbite JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>
</html>