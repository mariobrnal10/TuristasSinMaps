@extends('layouts.plantilla_admin')
@section('titulo', 'Administracion de admins')

@section('AdminNuevo')

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
            <h3>Admins Registrados</h3>
            <table class="table table-bordered">
                <thead class="tehad-light">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th>Contraseña</th>
                    </tr>
                    <tbody>
                        <tr>
                            <td>12</td>
                            <td>Mario</td>
                            <td>Bernal</td>
                            <td>Mario@gmail.com</td>
                            <td>********</td>
                            <td><button type="button" class="btn btn-primary">Actualizar</button></td>
                            <td><button type="button" class="btn btn-danger">Eliminar</button></td>
                        </tr>
                    </tbody>
                </thead>
            </table>
            </form>

        </div>
        <div class="d-flex justify-content-between">
            <a href="{{ route('AdministracionAgregar') }}" class="btn btn-success">Agregar Admin</a>
        </div>
    </div>
</body>
@endsection 