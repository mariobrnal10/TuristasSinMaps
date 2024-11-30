<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    @vite(['resources/js/app.js'])

</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('rutaHome')}}">Turistas Sin Maps</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('rutaHome')}}">Servicios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('rutaSerUsuario')}}">Usuarios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('rutaTerminos')}}">Tarifas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('AdministracionVuelos')}}">Vuelos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('AdministracionHoteles')}}">Hoteles</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <div class="content">
      @yield("serviciosAdmin")
    </div>
    <div class="content">
      @yield("serviciosUsuario")
    </div>
    <div class="content">
      @yield("tarifas")
    </div>
    <div class="content">
      @yield("AdminVuelos")
    </div>
    <div class="content">
      @yield("AdminHoteles")
    </div>
    
</body>
</html>