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
            width: 100%;
            min-height: 70vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 15px;
            width: 90%;
            max-width: 600px;
            text-align: center;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }

        .form-container h2 {
            color: #343a40;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #343a40;
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 14px;
        }

        .btn {
            font-size: 14px;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.2s, opacity 0.2s;
        }

        .btn-primary {
            background-color: #007bff;
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
        <div class="form-container">
            <h2>Registrar Hotel</h2>
            <form action="{{ route('hoteles.create') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre del Hotel</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Ej. Hotel Paraíso" required>
                </div>

                <div class="form-group">
                    <label for="zona">Zona</label>
                    <input type="text" id="zona" name="zona" placeholder="Ej. Playa Norte" required>
                </div>

                <div class="form-group">
                    <label for="habitaciones">Número de Habitaciones</label>
                    <input type="number" id="habitaciones" name="habitaciones" min="1" placeholder="Ej. 50" required>
                </div>

                <div class="form-group">
                    <label for="habitaciones_dis">Habitaciones Disponibles</label>
                    <input type="number" id="habitaciones_dis" name="habitaciones_disp" min="0" placeholder="Ej. 20" required>
                </div>

                <div class="form-group">
                    <label for="categoria">Categoría</label>
                    <select id="categoria" name="categoria" required>
                        <option value="" disabled selected>Seleccione una categoría</option>
                        <option value="1">1 Estrella</option>
                        <option value="2">2 Estrellas</option>
                        <option value="3">3 Estrellas</option>
                        <option value="4">4 Estrellas</option>
                        <option value="5">5 Estrellas</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="tarifa">Precio por Noche</label>
                    <input type="number" id="tarifa" name="tarifa" min="0" step="0.01" placeholder="Ej. 1200.50" required>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-success btn-lg shadow-lg w-75">
                        {{__('Guardar Registro')}}
                    </button></div>
            </form>
        </div>
    </section>
</body>
@endsection
