@extends('layouts.plantilla_admin')
@section('titulo', 'Administración de Hoteles')

@section('AdminHoteles')
<body>
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        .hero {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width: 110vw;
            height: 70vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .usuario {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 15px;
            width: 90%;
            max-width: 800px;
            text-align: center;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }

        .usuario h2, .usuario h3 {
            color: #343a40;
            margin-bottom: 20px;
        }

        table {
            margin-top: 20px;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        th {
            background-color: #007bff;
            color: rgb(25, 7, 7);
            text-align: center;
        }

        td {
            text-align: center;
            vertical-align: middle;
        }

        .btn {
            font-size: 14px;
            padding: 8px 12px;
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
        }

        .btn-success {
            background-color: #28a745;
            border: none;
        }

        .btn:hover {
            opacity: 0.9;
        }
    </style>

    <section class="hero">
        <div class="usuario">
            <h2>Panel de Administración de Servicios</h2>
            <h3>Administradores Registrados</h3>

            
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th>Contraseña</th>
                        <th>Actualizar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($consultarAdmins as $administradores)

                    <tr>
                        <td>{{$administradores->id}}</td>
                        <td>{{$administradores->nombre}}</td>
                        <td>{{$administradores->apelido}}</td>
                        <td>{{$administradores->correo}}</td>
                        <td>{{$administradores->contraseña}}</td>
                        <td><button type="button" class="btn btn-primary">Actualizar</button></td>
                        <td>
                            <form action="{{ route('cliente.destroy', ['id' => $administradores->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                        
                        

                    </tr>
                    @endforeach
                </tbody>
            </table>


            <div class="mt-4">
                <a href="{{ route('administrador_nuevo') }}" class="btn btn-success">Agregar Usuario</a>
            </div>
        </div>
    </section>
</body>
@endsection
