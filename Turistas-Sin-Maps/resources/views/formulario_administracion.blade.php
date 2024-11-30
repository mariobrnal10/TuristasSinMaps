@extends('layouts.plantilla_admin')
@section('titulo', 'Formulario Administradores')
@section('formularioAdmin')

{{-- Tarjeta de formulario --}}
<body>
    <style>
        .usuario {
            background-color: rgba(208, 210, 210, 0.199);
            padding: 20px;
            border-radius: 10px;
            width: 100%;
            max-width: 700px;
            text-align: center;
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin: 0 auto;
        }
        
        .hero {
            background-image: url('{{ asset('img/inicioadmin.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            width: 100%;
            max-width: 600px;
        }
    </style>

    <section class="hero">
        <div class="card font-monospace">
            <div class="card-header fs-5 text-center text-primary">
                Agregar Administrador
            </div>
            <div class="card-body">
                <form class="usuario">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" value="">
                        <small class="fst-italic text-danger"></small>
                    </div>

                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" name="apellido" value="">
                        <small class="fst-italic text-danger"></small>
                    </div>

                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo</label>
                        <input type="email" class="form-control" name="correo" value="">
                        <small class="fst-italic text-danger"></small>
                    </div>

                    <div class="mb-3">
                        <label for="telefono" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="telefono" value="">
                        <small class="fst-italic text-danger"></small>
                    </div>

                    <div class="d-grid gap-2 mt-2">
                        <button type="submit" class="btn btn-warning">Agregar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

@endsection
