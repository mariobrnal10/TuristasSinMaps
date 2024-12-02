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
            width: 2000px;
            min-height: 70vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .usuario {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 15px;
            width: 90%;
            max-width: 1200px;
            text-align: center;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }

        .usuario h2, .usuario h3 {
            color: #343a40;
            margin-bottom: 20px;
        }

        .table-container {
            overflow-x: auto;
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            min-width: 800px;
            border-collapse: collapse;
            background-color: white;
        }

        th, td {
            padding: 10px;
            text-align: center;
            vertical-align: middle;
            border: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: rgb(23, 19, 19);
        }

        td {
            color: #343a40;
        }

        .btn {
            font-size: 14px;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background-color 0.2s, opacity 0.2s;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            color: white;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
            color: white;
        }

        .btn-success {
            background-color: #28a745;
            border: none;
            color: white;
        }

        .btn:hover {
            opacity: 0.9;
        }

        .mt-4 {
            margin-top: 20px;
        }
    </style>

    <section class="hero">
        <div class="usuario">
            <h2>Panel de Administración de Servicios</h2>
            <h3>Hoteles Registrados</h3>
            
            <div class="table-container">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            <th>Contraseña</th>
                            <th>Actualizar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($consultarUsuarios as $usuarios)
                        <tr>
                            <td>{{ $usuarios->id }}</td>
                            <td>{{ $usuarios->nombre }}</td>
                            <td>{{ $usuarios->email}}</td>
                            <td>{{ $usuarios->telefono}}</td>
                            <td>{{ $usuarios->contraseña }}</td>
                            <td><button type="button" class="btn btn-primary">Actualizar</button></td>
                            <td>
                                <form action="{{ route('usuarios.destroy', ['id' => $usuarios->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        Eliminar
                                    </button>
                                </form></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-4">
                <button type="button" class="btn btn-success" onclick="window.location.href='{{ route('rutaRegistro') }}'">
                    Agregar Usuario
                </button>
            </div>
        </div>
    </section>
</body>
@endsection