<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #3e7ebf, #f8f9fa); 
            margin: 0; 
            height: 100vh; 
        }

        .sidebar {
            height: 100vh;
            position: fixed;
            width: 250px;
            background-color: #343a40;
            padding-top: 20px;
        }

        .sidebar .nav-link {
            color: #fff;
            margin-bottom: 10px;
        }

        .sidebar .nav-link:hover {
            background-color: #3e7ebf;
            border-radius: 5px;
        }

        .sidebar .nav-link i {
            margin-right: 10px;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        .navbar-brand {
            color: #fff;
        }

        .navbar-brand:hover {
            color: #ddd;
        }
    </style>
</head>
<body>

    <div class="sidebar d-flex flex-column p-3">
        <a href="#" class="navbar-brand fs-4 text-center">Admin Dashboard</a>
        <hr class="text-white">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="{{Route('listarHoteles')}}" class="nav-link"><i class="fas fa-hotel"></i> Hoteles</a>
            </li>
            <li class="nav-item">
                <a href="{{Route('listarVuelos')}}" class="nav-link"><i class="fas fa-plane"></i> Vuelos</a>
            </li>
            <li class="nav-item">
                <a href="{{Route('listarAdmins')}}" class="nav-link"><i class="fas fa-user-shield"></i> Administradores</a>
            </li>
            <li class="nav-item">
                <a href="{{Route('listarUsuarios')}}" class="nav-link"><i class="fas fa-users"></i> Usuarios</a>
            </li>
        </ul>
    </div>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
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
<div class="content">
  @yield("AdminNuevo")
</div>
<div class="content">
  @yield("formularioAdmin")
</div>
</html>