@extends('layouts.plantilla2')
@section('titulo', 'Hoteles')

@section('busquedaHoteles')

<body>
    <style>
    .vuelos-container{
        background-color: rgba(208, 210, 210, 0.321);
        padding: 20px;
        border-radius: 10px;
        width: 100%;
        max-width: 1000px;
        text-align: center;
        align-items: center;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
    </style>
    <section class="hero" style="background-image: url('{{ asset('img/INICIO.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100vw; height: 100vh;">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}"> 

    <div class="vuelos-container">
        <h2 class="text-center">Busqueda de Hoteles</h2>
        <form action="">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="destino">Ciudad de destino</label>
                    <input type="text" class="form-control" nombre="destino" placeholder="Ingrese la ciudad de destino">
                </div>
                <div class="form-group col-md-6">
                    <label for="pasajeros">Numero de huespedes</label>
                    <input type="number" class="form-control" nombre="pasajeros" placeholder="Ingreso la cantidad de pasajeros">
                </div>
                
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="fechasalida">Fecha de salida</label>
                    <input type="date" class="form-control" nombre="fechasalida">
                </div>
                <div class="form-group col-md-6">
                    <label for="fecharegreso">Fecha de regreso</label>
                    <input type="date" class="form-control" nombre="fecharegreso">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="fPrecio">Noches</label>
                    <select name="form-control" nombre="filtroprecio">
                        <option selected>Seleccione una opcion</option>
                        <option value="asc">1 noche</option>
                        <option value="asc">2 noches</option>
                        <option value="asc">3 noches</option>
                        <option value="asc">4 noches</option>
                        <option value="asc">5 noches</option>
                        <option value="asc">6 noches</option>
                        <option value="asc">7 noches</option>

                    </select>

                </div>
                <div class="form-group col-md-4">
                    <label for="fPrecio">Filtrar precios</label>
                    <select name="form-control" nombre="filtroprecio">
                        <option selected>Seleccione una opcion</option>
                        <option value="asc">Entre 1200 a 2500</option>
                        <option value="asc">Entre 2500 a 3500</option>
                        <option value="asc">Mayor a 3500</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="duracion">Estrellas</label>
                    <select class="form-control" nombre="duracion">
                        <option selected>Seleccione una opcion</option>
                        <option value="asc">1 a 3 estrellas</option>
                        <option value="asc">4 a 5 estrellas</option>
                        <option value="asc">Calidad Diamante</option>
                    </select>
                </div>
            </div>
            <button type="button" class="btn btn-primary btn-block mt-3">Buscar Hoteles</button>
        </form>
        <div class="mt-5">
            <h3>Resultados de la busqueda</h3>
            <table class="table table-bordered">
                <thead class="tehad-light">
                    <tr>
                        <th>Lugar</th>
                        <th>Nombre</th>
                        <th>Check-in/out</th>
                        <th>Estrellas</th>
                        <th>Precio por noche</th>
                        <th>Noches</th>
                        <th>Total</th>
                        <th>Disponibilidad</th>
                        <th>Reservar</th>
                    </tr>
                    <tbody>
                        <tr>
                            <td>Amelaco Bonfil</td>
                            <td>Cabañas Martinez</td>
                            <td>03:00pm a 04:00pm</td>
                            <td>1 Diamante</td>
                            <td>2000</td>
                            <td>3 noches</td>
                            <td>$6000</td>
                            <td>Disponible</td>
                            <td><button class="btn btn-succes btn-smn">Reservar habitacion</button></td>
                        </tr>
                    </tbody>
                </thead>
            </table>
        </div>
    </div>
</body>
@endsection 