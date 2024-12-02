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
            <h3>Usuarios Registrados</h3>
            <table class="table table-bordered">
                <thead class="tehad-light">
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Contraseña</th>
                        <th>Actualizar</th>
                        <th>Eliminar</th>
                    </tr>
                    <tbody>
                        <tr>
                            <td>12345678</td>
                            <td>AeroMexico</td>
                            <td>08:00pm a 09:00pm</td>
                            <td>$4500</td>
                            <td>Disponible</td>
                            <td><button type="button" class="btn btn-primary">Actualizar</button></td>
                            <td><button type="button" class="btn btn-danger">Eliminar</button></td>
                        </tr>
                    </tbody>
                </thead>
            </table>
            </form>

        </div>
        <div class="d-flex justify-content-between">
            <button type="button" class="btn btn-success">Agregar Usuario</button>
        </div>
    </div>
</body>
@endsection 