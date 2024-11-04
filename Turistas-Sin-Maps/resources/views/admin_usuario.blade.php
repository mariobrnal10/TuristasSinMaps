@extends('layouts.plantilla_admin')
@section('titulo', 'Servicios Usuario')

@section('serviciosUsuario')

<body>
    <style>
    .usuario{
    background-color: rgba(208, 210, 210, 0.321);
    padding: 20px;
    border-radius: 10px;
    width: 100%;
    max-width: 700px;
    text-align: center;
    align-items: center;
    display: flex;
    flex-direction: column;
    gap: 20px;
    }
    
    </style>
    <section class="hero" style="background-image: url('{{ asset('img/inicioadmin.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100vw; height: 100vh;">

    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}"> 

    <div class="usuario">
        <h2><center>Panel de administracion de servicios para usuarios de Turista sin Maps</center></h2>
        <div>
            <h3>Usuarios</h3>
            <ul class="list-group mb-4">
                <li class="list-group-item">Nombre: Alonso Chavez -Correo:chaveza@gmail.com -Telefono: 4271199759-Contraseña:******** -Tarjeta: ************0299 </li>
                <br>
                <li class="list-group-item">Nombre: Josue Mariano -Correo:mariano@gmail.com -Telefono: 4421237987-Contraseña:******** -Tarjeta: ************0298 </li>
                <br>
                <li class="list-group-item">Nombre: Mario Bernal -Correo:mario@gmail.com -Telefono: 4421764789-Contraseña:******** -Tarjeta: ************0297 </li>
                <br>
                <li class="list-group-item">Nombre: Gael Arriaga -Correo:jeli_pito@gmail.com -Telefono: 4421098746-Contraseña:******** -Tarjeta: ************0296 </li>

            </ul>
        </div>
        <div class="d-flex justify-content-between">
            <button type="button" class="btn btn-success">Agregar Usuario</button>
            <button type="button" class="btn btn-primary">Editar Usuario</button>
            <button type="button" class="btn btn-danger">Eliminar Usuario</button>
        </div>
    </div>
</body>
@endsection 