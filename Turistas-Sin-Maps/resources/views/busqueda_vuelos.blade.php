@extends('layouts.plantilla2')
@section('titulo', 'Vuelos')

@section('busquedaVuelos')

<body>

    <div class="container py-5">
        <div class="vuelos-container bg-light p-5 rounded shadow-sm">
            <h2 class="text-center text-primary mb-4">Búsqueda de Vuelos</h2>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="origen" class="font-weight-bold">Ciudad de origen</label>
                        <input type="text" class="form-control border-primary" id="origen" placeholder="Ingrese la ciudad de origen">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="destino" class="font-weight-bold">Ciudad de destino</label>
                        <input type="text" class="form-control border-primary" id="destino" placeholder="Ingrese la ciudad de destino">
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
                        <label for="pasajeros" class="font-weight-bold">Número de pasajeros</label>
                        <input type="number" class="form-control border-primary" id="pasajeros" placeholder="Ingrese la cantidad de pasajeros">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="filtroprecio" class="font-weight-bold">Filtrar precios</label>
                        <select class="form-control border-primary" id="filtroprecio">
                            <option selected>Seleccione una opción</option>
                            <option value="2500-4500">Entre 2500 a 4500</option>
                            <option value="4500-6000">Entre 4500 a 6000</option>
                            <option value="6000-8000">Entre 6000 a 8000</option>
                            <option value="8000">Mayor a 8000</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="duracion" class="font-weight-bold">Duración y escalas</label>
                        <select class="form-control border-primary" id="duracion">
                            <option selected>Seleccione una opción</option>
                            <option>Directo</option>
                            <option>1 escala</option>
                            <option>2 o más escalas</option>
                        </select>
                    </div>
                </div>
                <button type="button" class="btn btn-primary btn-block mt-4 d-flex align-items-center justify-content-center">
                    <img src="img/10.png" alt="Buscar" class="mr-2" style="width: 20px; height: 20px;"> Buscar Vuelos
                </button>
            </form>
        </div>

        <div class="mt-5">
            <h3>Resultados de la búsqueda</h3>

            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card h-100 shadow">
                        <img src="{{ asset('img/aero.jpg') }}" class="card-img-top" alt="Vuelo AeroMexico">
                        <div class="card-body">
                            <h5 class="card-title">AeroMexico</h5>
                            <p class="card-text">
                                <strong>Vuelo directo</strong><br>
                                Horario de abordaje: 08:00pm a 09:00pm
                            </p>
                            <p class="card-text">
                                <strong>Precio: MXN$4,500</strong><br>
                                <strong>Disponibilidad:</strong> Disponible
                            </p>
                            <button class="btn btn-primary w-100">Reservar vuelo</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card h-100 shadow">
                        <img src="{{ asset('img/bus.jpeg') }}" class="card-img-top" alt="Vuelo Viva Aerobus">
                        <div class="card-body">
                            <h5 class="card-title">Viva Aerobus</h5>
                            <p class="card-text">
                                <strong>1 escala</strong><br>
                                Horario de abordaje: 09:00pm a 10:30pm
                            </p>
                            <p class="card-text">
                                <strong>Precio: MXN$3,800</strong><br>
                                <strong>Disponibilidad:</strong> Disponible
                            </p>
                            <button class="btn btn-primary w-100">Reservar vuelo</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

@endsection