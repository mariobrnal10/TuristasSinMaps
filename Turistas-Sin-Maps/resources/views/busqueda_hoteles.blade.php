@extends('layouts.plantilla2')
@section('titulo', 'Hoteles')

@section('busquedaHoteles')

<body>

<div class="container py-5">
    <div class="vuelos-container bg-light p-5 rounded shadow-sm">
        <h2 class="text-center text-primary mb-4">Búsqueda de Hoteles</h2>
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="destino" class="font-weight-bold">Ciudad de destino</label>
                    <input type="text" class="form-control border-primary" id="destino" placeholder="Ingrese la ciudad de destino">
                </div>
                <div class="form-group col-md-6">
                    <label for="pasajeros" class="font-weight-bold">Número de huéspedes</label>
                    <input type="number" class="form-control border-primary" id="pasajeros" placeholder="Ingrese la cantidad de huéspedes">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="fechasalida" class="font-weight-bold">Fecha de salida</label>
                    <input type="date" class="form-control border-primary" id="fechasalida">
                </div>
                <div class="form-group col-md-6">
                    <label for="fecharegreso" class="font-weight-bold">Fecha de regreso</label>
                    <input type="date" class="form-control border-primary" id="fecharegreso">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="noches" class="font-weight-bold">Noches</label>
                    <select class="form-control border-primary" id="noches">
                        <option selected>Seleccione una opción</option>
                        <option>1 noche</option>
                        <option>2 noches</option>
                        <option>3 noches</option>
                        <option>4 noches</option>
                        <option>5 noches</option>
                        <option>6 noches</option>
                        <option>7 noches</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="filtroprecio" class="font-weight-bold">Filtrar precios</label>
                    <select class="form-control border-primary" id="filtroprecio">
                        <option selected>Seleccione una opción</option>
                        <option>Entre 1200 a 2500</option>
                        <option>Entre 2500 a 3500</option>
                        <option>Mayor a 3500</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="estrellas" class="font-weight-bold">Estrellas</label>
                    <select class="form-control border-primary" id="estrellas">
                        <option selected>Seleccione una opción</option>
                        <option>1 a 3 estrellas</option>
                        <option>4 a 5 estrellas</option>
                        <option>Calidad Diamante</option>
                    </select>
                </div>
            </div>
            <button type="button" class="btn btn-primary btn-block mt-4 d-flex align-items-center justify-content-center">
                <img src="img/10.png" alt="Buscar" class="mr-2" style="width: 20px; height: 20px;"> Buscar Hoteles
            </button>
        </form>
    </div>

            <div class="mt-5">
                <h3>Resultados de la búsqueda</h3>


                <div class="row">

                    <div class="col-md-6 mb-4">
                        <div class="card h-100 shadow">
                            <img src="{{ asset('img/grecia.jpg') }}" class="card-img-top" alt="Live Aqua Cancún">
                            <div class="card-body">
                                <h5 class="card-title">Live Aqua Cancún</h5>
                                <p class="card-text">
                                    <strong>1 cama matrimonial</strong><br>
                                    Wi-Fi, Todo incluido
                                </p>
                                <p class="card-text">
                                    <strong>MXN$8,110 por noche</strong><br>
                                    MXN$9,810 total con impuestos
                                </p>
                                <button class="btn btn-primary w-100">Reservar</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="card h-100 shadow">
                            <img src="{{ asset('img/hotel2.jpg') }}" class="card-img-top" alt="Hard Rock Hotel Cancún">
                            <div class="card-body">
                                <h5 class="card-title">Hard Rock Hotel Cancún</h5>
                                <p class="card-text">
                                    <strong>1 cama matrimonial</strong><br>
                                    Wi-Fi, Todo incluido
                                </p>
                                <p class="card-text">
                                    <strong>MXN$7,580 por noche</strong><br>
                                    MXN$8,325 total con impuestos
                                </p>
                                <button class="btn btn-primary w-100">Reservar</button>
                            </div>
                        </div>
                    </div>
                </div>


                    
                </div>
            </div>
        </div>
    </section>


@endsection