<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    @vite(['resources/js/app.js'])
    @yield('css-carrito')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>
<body>

  <nav class="navbar navbar-expand bg-body-tertiary fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('rutaHome')}}">Turistas Sin Maps</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('rutaHome')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('rutaHoteles')}}">Hoteles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('rutaBVuelos')}}">Vuelos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('rutaCarrito')}}">Carrito De Reservacion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('rutaCancelar')}}">Cancelacion De Reservación</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('rutaUsuario')}}">Perfil De Usuario</a>
                </li>
            </ul>
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
    
</body>
</html>