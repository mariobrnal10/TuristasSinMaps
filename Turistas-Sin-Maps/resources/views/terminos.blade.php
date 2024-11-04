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
        <h2><center>Panel de administracion de servicios para tarifas de la pagina</center></h2>
        <div>
            <h3>Hoteles</h3>
            <ul class="list-group mb-4">
                <li class="list-group-item">Tarifa de aterrizaje: Esta tarifa es cobrada a las aerolíneas por el uso de las pistas para aterrizar. El monto generalmente varía según el peso del avión.</li>
                <br>
                <li class="list-group-item">Tarifa de estacionamiento de aeronaves: Aplica cuando una aeronave necesita quedarse en el aeropuerto por un tiempo prolongado. Se calcula por hora y varía dependiendo del tipo de avión.</li>
                <br>
                <li class="list-group-item">Tarifa de uso de terminal: Esta tarifa cubre el mantenimiento y uso de las instalaciones de la terminal, como las salas de espera y servicios de embarque. A menudo, se pasa a las aerolíneas y se incluye en los boletos.</li>
                <br>
                <li class="list-group-item">Tarifa de pasajeros: Esta tarifa, también conocida como "tarifa de uso de instalaciones" (TUA), se carga a los pasajeros y cubre costos de infraestructura y mejoras del aeropuerto.</li>
                <br>
                <li class="list-group-item">Tarifa de seguridad: Este cargo se aplica para cubrir los gastos de las inspecciones y medidas de seguridad, como los escáneres de equipaje y el personal de seguridad en el aeropuerto.</li>
            </ul>
        </div>
        <div class="d-flex justify-content-between">
            <button type="button" class="btn btn-success">Agregar tarifa</button>
            <button type="button" class="btn btn-primary">Editar tarifa</button>
            <button type="button" class="btn btn-danger">Eliminar tarifa</button>
        </div>
    </div>
    <div class="adminstracionVuelo">
        <h2><center>Panel de administracion de servicios para politicas de la pagina</center></h2>

        <div>
            <h3>Vuelos</h3>
            <ul class="list-group mb-4">
                <li class="list-group-item">Política de equipaje: Define los límites de peso y tamaño para el equipaje facturado y de mano. También incluye restricciones sobre artículos prohibidos y tarifas por exceso de peso.</li>
                <br>
                <li class="list-group-item">Política de demoras y cancelaciones: Establece los derechos de los pasajeros y las responsabilidades de las aerolíneas en caso de retrasos y cancelaciones de vuelos, como la compensación y reprogramación de vuelos.</li>
                <br>
                <li class="list-group-item">Política de seguridad: Incluye los requisitos de control de seguridad, como la revisión de pasajeros y equipaje antes de acceder a áreas restringidas o de embarque.</li>
                <br>
                <li class="list-group-item">Política de accesibilidad: Garantiza que las instalaciones sean accesibles para personas con discapacidades, incluyendo sillas de ruedas y otros servicios especiales.</li>
                <br>
                <li class="list-group-item">Política de estacionamiento: Establece las tarifas, el tiempo máximo de estacionamiento y las zonas designadas para diferentes tipos de vehículos, incluyendo políticas para servicios de larga estancia y corta estancia.</li>
            </ul>
        </div>
        <div class="d-flex justify-content-between">
            <button type="button" class="btn btn-success">Agregar politica</button>
            <button type="button" class="btn btn-primary">Editar politica</button>
            <button type="button" class="btn btn-danger">Eliminar politica</button>
        </div>
    </div>
</body>
@endsection 