@extends('layouts.plantilla2')

@section('titulo', 'Carrito de Compras')

@section('css-carrito')
<link rel="stylesheet" href="{{ asset('css/carrito.css') }}">
@endsection

@section('contenidoCarrito')

<section class="shopping-cart-section">
    <div class="container">
        <h1 class="title">Carrito de Compras</h1>
        <div class="products">
            <h2>Productos Disponibles</h2>
            <div class="product">
                <span>Vuelo a Londres - $10,000</span>
                <button onclick="addToCart('Vuelo a Londres', 10000)">Agregar</button>
            </div>
            <div class="product">
                <span>Hotel - $2,000</span>
                <button onclick="addToCart('Hotel', 2000)">Agregar</button>
            </div>
            <div class="product">
                <span>Equipaje extra - $2,000</span>
                <button onclick="addToCart('Equipaje extra', 2000)">Agregar</button>
            </div>
        </div>

        <div class="cart">
            <h2>Tu Carrito</h2>
            <div id="cart-items" class="cart-items">
                <p>Tu carrito está vacío.</p>
            </div>
            <div class="total">
                <span>Total: </span><span id="total-price">$0</span>
            </div>
            <button class="btn-pay" onclick="realizarPago()">Realizar el Pago</button>
        </div>
    </div>
</section>

<script>
    let cart = [];

    function addToCart(name, price) {
        const existingProduct = cart.find(item => item.name === name);
        if (existingProduct) {
            existingProduct.quantity += 1;
        } else {
            cart.push({ name, price, quantity: 1 });
        }
        updateCart();
    }

    function updateCart() {
        const cartItemsContainer = document.getElementById('cart-items');
        cartItemsContainer.innerHTML = '';
        let total = 0;

        if (cart.length === 0) {
            cartItemsContainer.innerHTML = '<p>Tu carrito está vacío.</p>';
            document.getElementById('total-price').innerText = '$0';
            return;
        }

        cart.forEach((item, index) => {
            const cartItem = document.createElement('div');
            cartItem.className = 'cart-item';
            cartItem.innerHTML = `
                <span>${item.name} - $${item.price}</span>
                <input type="number" min="1" value="${item.quantity}" onchange="updateQuantity(${index}, this.value)" />
                <button class="btn-remove" onclick="removeFromCart(${index})">Eliminar</button>
            `;
            cartItemsContainer.appendChild(cartItem);
            total += item.price * item.quantity;
        });

        document.getElementById('total-price').innerText = `$${total}`;
    }

    function updateQuantity(index, quantity) {
        if (quantity <= 0) return;
        cart[index].quantity = parseInt(quantity);
        updateCart();
    }

    function removeFromCart(index) {
        cart.splice(index, 1);
        updateCart();
    }

    function realizarPago() {
        const total = cart.reduce((sum, item) => sum + item.price * item.quantity, 0);
        if (total === 0) {
            Swal.fire('El carrito está vacío.');
            
            return;
        }
        Swal.fire(`Gracias por tu compra. Total: $${total}`);
        cart = [];
        updateCart();
    }
</script>


@endsection
