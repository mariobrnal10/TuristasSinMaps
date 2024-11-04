@extends('layouts.plantilla2')
@section('titulo', 'Hoteles')

@section('compra')

<body>
    <style>
    .vuelos-container{
        background-color: rgba(208, 210, 210, 0.459);
        padding: 20px;
        border-radius: 10px;
        width: 100%;
        max-width: 750px;
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
        <h2 class="text-center">Confirmacion de compra</h2>
        <br>
        <div class="mb-4">
            <h4>Vuelos y Hotel seleccionado</h4>
            <ul>
                <li >Vuelo 12345 -Fecha 22/11/2024 -Precio: $4500 -Pasajeros: 2</li>
                <li >Cabaña 2 Cabañas Martinez -Fecha 23/11/2024 al 25/11/2024 -Precio: $6000 -Huespedes: 2</li>
            </ul>
        </div>
        <div>
            <h4>Detalle del precio a pagar total</h4>
            <p>Precio por pasajeros: $4500</p>
            <p>Total de pasajeos: 2</p>
            <p>Precio por noche de hotel: $2000</p>
            <p>Total de noches: 3</p>
            <center><p><strong>Total: $15000</strong></p></center>
        </div>
        <div class="form-row">
            <div class="form-group col-md-7">
                <label for="numTarjeta">Numero de tarjeta</label>
                <input type="text" class="form-control" nombre="numTarjeta" placeholder="Ingrese el numero de tarjeta">
            </div>
            <div class="form-group col-md-5">
                <label for="numCvv">Numero CVV</label>
                <input type="text" class="form-control" nombre="numCvv" placeholder="Ingrese el CVV">
            </div>
        </div>
        <div class="form-check mb-4">
            <input type="checkbox" class="form-check-input" id="aceptarTerminos">
            <label class="form-check-label" for="aceptarTerminos">Aceptar términos y condiciones</label>
        </div>
        <div class="d-flex justify-content-between">
            <button type="button" class="btn btn-success">Confirmar compra</button>
            <button type="button" class="button btn-danger">Cancelar</button>

        </div>

    </div>
</body>
@endsection 