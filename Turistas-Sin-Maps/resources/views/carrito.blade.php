@extends('layouts.plantilla2')

@section('titulo', 'Carrito de Compras')

@section('css-carrito')
<link rel="stylesheet" href="{{ asset('css/carrito.css') }}">
@endsection

@section('contenidoCarrito')

<section class="shopping-cart-section">
    <div class="container">
        <h1 class="title">Carrito de Compras</h1>
        <div class="cart">
            <h2>Tu Carrito</h2>
            <div id="cart-items" class="cart-items">
                @if($carrito->isEmpty())
                    <p>Tu carrito está vacío.</p>
                @else
                    @foreach($carrito as $item)
                        <div class="cart-item" data-id="{{ $item->id }}">
                            <span>
                                {{ $item->id_vuelo ? 'Vuelo' : 'Hotel' }}:
                                {{ $item->id_vuelo ? $item->vuelo_origen . ' a ' . $item->vuelo_destino : $item->hotel_nombre }}
                                - ${{ number_format($item->precio_parcial, 2) }}
                            </span>
                            <input type="number" min="1" value="{{ $item->cantidad }}" onchange="updateQuantity({{ $item->id }}, this.value)" />
                            <button class="btn-remove" onclick="removeFromCart({{ $item->id }})">Eliminar</button>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="total">
                <span>Total: </span><span id="total-price">${{ number_format($total, 2) }}</span>
            </div>
            <button class="btn-pay" onclick="confirmarPago()">Realizar el Pago</button>
        </div>

        <!-- Formulario para datos de tarjeta -->
        <div id="formularioPago" style="display: none; margin-top: 20px;">
            <h2>Ingrese los datos de su tarjeta</h2>
            <form id="formTarjeta">
                <div class="form-group">
                    <label for="numeroTarjeta">Número de tarjeta</label>
                    <input type="text" id="numeroTarjeta" class="form-control" placeholder="1234 5678 9101 1121" maxlength="16" required>
                </div>
                <div class="form-group">
                    <label for="nombreTarjeta">Nombre en la tarjeta</label>
                    <input type="text" id="nombreTarjeta" class="form-control" placeholder="Juan Pérez" required>
                </div>
                <div class="form-group">
                    <label for="fechaExpiracion">Fecha de expiración</label>
                    <input type="text" id="fechaExpiracion" class="form-control" placeholder="MM/AA" maxlength="5" required>
                </div>
                <div class="form-group">
                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" class="form-control" placeholder="123" maxlength="3" required>
                </div>
                <button type="button" class="btn btn-primary" onclick="procesarPago()">Pagar</button>
            </form>
        </div>
    </div>
</section>

<script>
    // Confirmar antes de mostrar el formulario de pago
    function confirmarPago() {
        Swal.fire({
            title: '¿Deseas proceder con el pago?',
            text: "Este proceso no puede revertirse.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Sí, proceder',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('formularioPago').style.display = 'block'; // Mostrar el formulario
                window.scrollTo(0, document.body.scrollHeight); // Desplazar hacia el formulario
            }
        });
    }

    // Procesar el pago (simulación)
    function procesarPago() {
        const numeroTarjeta = document.getElementById('numeroTarjeta').value;
        const nombreTarjeta = document.getElementById('nombreTarjeta').value;
        const fechaExpiracion = document.getElementById('fechaExpiracion').value;
        const cvv = document.getElementById('cvv').value;

        // Validaciones básicas ficticias
        if (!numeroTarjeta || numeroTarjeta.length !== 16 || isNaN(numeroTarjeta)) {
            alert('Número de tarjeta inválido.');
            return;
        }

        if (!nombreTarjeta) {
            alert('Nombre en la tarjeta inválido.');
            return;
        }

        if (!fechaExpiracion || !/^\d{2}\/\d{2}$/.test(fechaExpiracion)) {
            alert('Fecha de expiración inválida. Formato: MM/AA');
            return;
        }

        if (!cvv || cvv.length !== 3 || isNaN(cvv)) {
            alert('CVV inválido.');
            return;
        }

        Swal.fire({
            title: 'Pago exitoso',
            text: 'Gracias por su compra.',
            icon: 'success'
        }).then(() => {
            // Simular limpieza del carrito o redirección
            window.location.href = "{{ route('carrito.listar') }}";
        });
    }

    // Actualizar cantidad en el carrito
    function updateQuantity(id, quantity) {
        if (quantity <= 0) return;

        fetch("{{ route('carrito.actualizarCantidad') }}", {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ id: id, cantidad: quantity }),
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            } else {
                alert('Error al actualizar la cantidad.');
            }
        })
        .catch(error => console.error('Error:', error));
    }

    // Eliminar un elemento del carrito
    function removeFromCart(id) {
        fetch("{{ route('carrito.eliminar') }}", {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ id: id }),
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            } else {
                alert('Error al eliminar el producto.');
            }
        })
        .catch(error => console.error('Error:', error));
    }
</script>

@endsection
