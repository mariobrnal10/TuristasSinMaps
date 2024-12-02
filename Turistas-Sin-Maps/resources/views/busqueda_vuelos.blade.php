@extends('layouts.plantilla2')
@section('titulo', 'Vuelos')

@section('busquedaVuelos')

<body>
    <div class="container py-5">
        <div class="vuelos-container bg-light p-5 rounded shadow-sm">
            <h2 class="text-center text-primary mb-4">Búsqueda de Vuelos</h2>
            <form id="formVuelos" action="{{ route('buscarVuelos') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="origen" class="font-weight-bold">Ciudad de origen</label>
                        <input type="text" class="form-control border-primary" id="origen" name="origen" placeholder="Ingrese la ciudad de origen" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="destino" class="font-weight-bold">Ciudad de destino</label>
                        <input type="text" class="form-control border-primary" id="destino" name="destino" placeholder="Ingrese la ciudad de destino" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="fechasalida" class="font-weight-bold">Fecha de salida</label>
                        <input type="date" class="form-control border-primary" id="fechasalida" name="fechasalida">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="fecharegreso" class="font-weight-bold">Fecha de regreso</label>
                        <input type="date" class="form-control border-primary" id="fecharegreso" name="fecharegreso">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="pasajeros" class="font-weight-bold">Número de pasajeros</label>
                        <input type="number" class="form-control border-primary" id="pasajeros" name="pasajeros" placeholder="Ingrese la cantidad de pasajeros">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="filtroprecio" class="font-weight-bold">Filtrar precios</label>
                        <select class="form-control border-primary" id="filtroprecio" name="filtroprecio">
                            <option selected>Seleccione una opción</option>
                            <option value="2500-4500">Entre 2500 a 4500</option>
                            <option value="4500-6000">Entre 4500 a 6000</option>
                            <option value="6000-8000">Entre 6000 a 8000</option>
                            <option value="8000">Mayor a 8000</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="duracion" class="font-weight-bold">Duración y escalas</label>
                        <select class="form-control border-primary" id="duracion" name="duracion">
                            <option selected>Seleccione una opción</option>
                            <option>Directo</option>
                            <option>1 escala</option>
                            <option>2 o más escalas</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block mt-4">
                    <img src="{{ asset('img/10.png') }}" alt="Buscar" class="mr-2" style="width: 20px; height: 20px;"> Buscar Vuelos
                </button>
            </form>
        </div>

        <div class="mt-5" id="resultadosVuelos">
            <h3>Resultados de la búsqueda</h3>
            <div class="row" id="resultados"></div>
        </div>
    </div>

    <script>
        document.getElementById('formVuelos').addEventListener('submit', function(event) {
            event.preventDefault();

            const formData = new FormData(this);

            fetch("{{ route('buscarVuelos') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                const resultadosDiv = document.getElementById('resultados');
                resultadosDiv.innerHTML = '';

                if (data.length === 0) {
                    resultadosDiv.innerHTML = '<p class="text-center">No se encontraron vuelos que coincidan con los criterios de búsqueda.</p>';
                } else {
                    data.forEach(vuelo => {
                        resultadosDiv.innerHTML += `
                            <div class="col-md-6 mb-4">
                                <div class="card h-100 shadow">
                                    <img src="{{ asset('img/aero.jpg') }}" class="card-img-top" alt="${vuelo.aerolinea}">
                                    <div class="card-body">
                                        <h5 class="card-title">${vuelo.aerolinea}</h5>
                                        <p class="card-text">
                                            <strong>Clase:</strong> ${vuelo.nombre_clase}<br>
                                            <strong>Origen:</strong> ${vuelo.origen}<br>
                                            <strong>Destino:</strong> ${vuelo.destino}<br>
                                            <strong>Precio:</strong> MXN $${vuelo.precio}<br>
                                            <strong>Fecha Salida:</strong> ${vuelo.fecha_salida}<br>
                                            <strong>Fecha Llegada:</strong> ${vuelo.fecha_llegada}
                                        </p>
                                        <button class="btn btn-primary w-100" onclick="reservarVuelo(${vuelo.id}, ${vuelo.precio})">Reservar vuelo</button>
                                    </div>
                                </div>
                            </div>
                        `;
                    });
                }
            })
            .catch(error => console.error('Error:', error));
        });

        function reservarVuelo(vueloId, precio) {
            fetch("{{ route('carrito.agregarVuelo') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    id_vuelo: vueloId,
                    precio: precio,
                }),
            })
            .then(response => response.json())
            .then(data => {
                alert(data.message);
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    </script>
</body>
@endsection
