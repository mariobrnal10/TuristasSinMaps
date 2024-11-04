@extends('layouts.plantilla2')
@section('titulo', 'Vuelos')

@section('busquedaVuelos')

<body>
    <style>
    .vuelos-container{
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
    <section class="hero" style="background-image: url('{{ asset('img/INICIO.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100vw; height: 100vh;">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}"> 

    <div class="vuelos-container">
        <h2 class="text-center">Busqueda de vuelos</h2>
        <form action="">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="origen">Ciudad de origen</label>
                    <input type="text" class="form-control" nombre="origen" placeholder="Ingrese la ciudad de origen">
                </div>
                <div class="form-group col-md-6">
                    <label for="destino">Ciudad de destino</label>
                    <input type="text" class="form-control" nombre="destino" placeholder="Ingrese la ciudad de destino">
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
                    <label for="pasajeros">Numero de pasajeros</label>
                    <input type="number" class="form-control" nombre="pasajeros" placeholder="Ingreso la cantidad de pasajeros">
                </div>
                <div class="form-group col-md-4">
                    <label for="fPrecio">Filtrar precios</label>
                    <select name="form-control" nombre="filtroprecio">
                        <option selected>Seleccione una opcion</option>
                        <option value="asc">Entre 2500 a 4500</option>
                        <option value="asc">Entre 4500 a 6000</option>
                        <option value="asc">Entre 6000 a 8000</option>
                        <option value="asc">Mayor a 8000</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="duracion">Duracion y escalas</label>
                    <select class="form-control" nombre="duracion">
                        <option value="directo">Directo</option>
                        <option value="una_escala">1 escala</option>
                        <option value="escalas">2 o mas escalas</option>
                    </select>
                </div>
            </div>
            <button type="button" class="btn btn-primary btn-block mt-3">Buscar vuelos</button>
        </form>
        <div class="mt-5">
            <h3>Resultados de la busqueda</h3>
            <table class="table table-bordered">
                <thead class="tehad-light">
                    <tr>
                        <th>Numero del vuelo</th>
                        <th>Aerolinea</th>
                        <th>Horario de abordaje</th>
                        <th>Precio</th>
                        <th>Disponibilidad</th>
                        <th>Reservar</th>
                    </tr>
                    <tbody>
                        <tr>
                            <td>12345678</td>
                            <td>AeroMexico</td>
                            <td>08:00pm a 09:00pm</td>
                            <td>$4500</td>
                            <td>Disponible</td>
                            <td><button class="btn btn-succes btn-smn">Reservar vuelo</button></td>
                        </tr>
                    </tbody>
                </thead>
            </table>
        </div>
    </div>
</body>
@endsection 