@extends('layouts.plantilla2')
@section('titulo', 'Cancelacion')

@section('cancelar')

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
        <section class="hero">
        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}"> 
    <div class="vuelos-container">
        <h2 class="text-center">Cancelar Reservacion</h2>
        <div class="mb-4">
            <h4>Detalles del vuelo</h4>
            <ul class="lista">
                <li>Vuelo: 12345</li>
                <li>Aerolinea: AeroMexico</li>
                <li>Fecha: 23/11/2024</li>
                <li>Total: $4500</li>
            </ul>
            <h4>Detalles del hotel</h4>
            <ul>
                <li>Lugar: Amelaco de Bonfil</li>
                <li>Hotel: Cabañas Martinez</li>
                <li>NOches: 3 noches</li>
                <li>Total: $6000</li>
                
            </ul>
        </div>
        <div class="form-group mb-5">
            <label for="razonCancelacion"><h4>Razon de su cancelacion</h4></label>
            <input type="text" class="form-control" nombre="razonCancelacion" placeholder="Ingrese la razon de su cancelacion">
        </div>
        <div class="d-flex justify-content-between">
            <button type="button" class="btn btn-danger">Confirmar cancelacion</button>
            <button type="button" class="btn btn-secondary">Volver</button>
        </div>
    </div>
</body>
@endsection 