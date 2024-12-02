@extends('layouts.plantilla2')
@section('titulo', 'Hoteles')

@section('busquedaHoteles')

<body>
<div class="container py-5">
    <div class="vuelos-container bg-light p-5 rounded shadow-sm">
        <h2 class="text-center text-primary mb-4">Búsqueda de Hoteles</h2>
        <form id="formHoteles" action="{{ route('buscarHoteles') }}" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="destino" class="font-weight-bold">Ciudad de destino</label>
                    <input type="text" class="form-control border-primary" id="destino" name="destino" placeholder="Ingrese la ciudad de destino">
                </div>
                <div class="form-group col-md-6">
                    <label for="pasajeros" class="font-weight-bold">Número de huéspedes</label>
                    <input type="number" class="form-control border-primary" id="pasajeros" name="pasajeros" placeholder="Ingrese la cantidad de huéspedes">
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
                    <label for="noches" class="font-weight-bold">Noches</label>
                    <select class="form-control border-primary" id="noches" name="noches">
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
                    <select class="form-control border-primary" id="filtroprecio" name="filtroprecio">
                        <option selected>Seleccione una opción</option>
                        <option>Entre 1200 a 2500</option>
                        <option>Entre 2500 a 3500</option>
                        <option>Mayor a 3500</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="estrellas" class="font-weight-bold">Estrellas</label>
                    <select class="form-control border-primary" id="estrellas" name="estrellas">
                        <option selected>Seleccione una opción</option>
                        <option>1 a 3 estrellas</option>
                        <option>4 a 5 estrellas</option>
                        <option>Calidad Diamante</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-4 d-flex align-items-center justify-content-center">
                <img src="img/10.png" alt="Buscar" class="mr-2" style="width: 20px; height: 20px;"> Buscar Hoteles
            </button>
        </form>
    </div>

    <div class="mt-5" id="resultadosHoteles">
        <h3>Resultados de la búsqueda</h3>
        <div class="row" id="resultados">
            <!-- Los resultados dinámicos se insertarán aquí -->
        </div>
    </div>
</div>

<script>
    // Script para manejar la búsqueda de hoteles y reserva
    document.getElementById('formHoteles').addEventListener('submit', function (event) {
        event.preventDefault();

        const formData = new FormData(this);

        fetch("{{ route('buscarHoteles') }}", {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
            body: formData,
        })
        .then(response => response.json())
        .then(data => {
            const resultadosDiv = document.getElementById('resultados');
            resultadosDiv.innerHTML = ''; // Limpiar resultados anteriores

            if (data.length === 0) {
                resultadosDiv.innerHTML = '<p class="text-center">No se encontraron hoteles que coincidan con los criterios de búsqueda.</p>';
            } else {
                data.forEach(hotel => {
                    resultadosDiv.innerHTML += `
                        <div class="col-md-6 mb-4">
                            <div class="card h-100 shadow">
                                <img src="${hotel.foto}" class="card-img-top" alt="${hotel.nombre}" width="200" height="250">
                                <div class="card-body">
                                    <h5 class="card-title">${hotel.nombre}</h5>
                                    <p class="card-text">
                                        <strong>Zona:</strong> ${hotel.zona}<br>
                                        <strong>Precio por noche:</strong> MXN $${hotel.precio_noche}<br>
                                        <strong>Habitaciones disponibles:</strong> ${hotel.habitaciones_disponibles}
                                    </p>
                                    <button class="btn btn-primary w-100" onclick="reservarHotel(${hotel.id}, ${hotel.precio_noche})">Reservar</button>
                                </div>
                            </div>
                        </div>
                    `;
                });
            }
        })
        .catch(error => console.error('Error:', error));
    });

    // Función para manejar la reserva de hoteles
    function reservarHotel(hotelId, precio) {
        fetch("{{ route('carrito.agregarHotel') }}", {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                id_hotel: hotelId,
                precio: precio,
            }),
        })
        .then(response => response.json())
        .then(data => {
            alert(data.message); // Mensaje de éxito
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
</script>
</body>

@endsection
