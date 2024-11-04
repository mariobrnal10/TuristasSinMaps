@extends('layouts.plantilla_admin')
@section('titulo', 'Servicios Administracion')

@section('serviciosAdmin')

<body>
    <style>
    .admistracion{
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
    .adminstracionVuelo{
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

    <div class="admistracion">
        <h2><center>Panel de administracion de servicios para hoteles</center></h2>
        <div>
            <h3>Hoteles</h3>
            <ul class="list-group mb-4">
                <li class="list-group-item">Hotel: Cabañas Martinez - Ubicación: Amelaco de Bonfil -Precio por noche: $2000 -Estrellas: 5</li>
                <li class="list-group-item">Hotel: HotelAveInn -Ubicacion: Zona dorada, Mazatlan -Precio por noche: $1200 -Estrellas: 4</li>
            </ul>
        </div>
        <div class="d-flex justify-content-between">
            <button type="button" class="btn btn-success">Agregar Hotel</button>
            <button type="button" class="btn btn-primary">Editar Hotel</button>
            <button type="button" class="btn btn-danger">Eliminar Hotel</button>
        </div>
    </div>
    <div class="adminstracionVuelo">
        <h2><center>Panel de administracion de servicios de vuelos</center></h2>

        <div>
            <h3>Vuelos</h3>
            <ul class="list-group mb-4">
                <li class="list-group-item">Aerolinea: AeroMexico -Origen: Queretaro Destino: Yucatan -Precio por persona: $1200 -Check-in: 4:00pm</li>
                <li class="list-group-item">Aerolinea: AeroMexico -Origen: Queretaro Destino: Mazatlan -Precio por persona: $800 -Check-in: 4:00pm</li>

            </ul>
        </div>
        <div class="d-flex justify-content-between">
            <button type="button" class="btn btn-success">Agregar Vuelo</button>
            <button type="button" class="btn btn-primary">Editar Vuelo</button>
            <button type="button" class="btn btn-danger">Eliminar Vuelo</button>
        </div>
    </div>
</body>
@endsection 