@extends('layouts.plantilla2')

@section('titulo', 'Carrito De Compras')

@section('css-carrito')

    
@endsection

@section('contenidoCarrito')
   
<section style="background-image: url('{{ asset('img/home.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100vw; height: 100vh;">
    <div class="container">
        <h1>Carrito de Compras</h1>
        <div class="product">
            <span>Producto 1 - $10</span>
            <button onclick="addToCart('Producto 1', 10)">Agregar al Carrito</button>
        </div>
        <div class="product">
            <span>Producto 2 - $15</span>
            <button onclick="addToCart('Producto 2', 15)">Agregar al Carrito</button>
        </div>
        <div class="product">
            <span>Producto 3 - $20</span>
            <button onclick="addToCart('Producto 3', 20)">Agregar al Carrito</button>
        </div>
    
        <div class="cart">
            <h2>Carrito</h2>
            <div id="cart-items"></div>
            <div id="total-price">Total: $0</div>
            <div>
                <button onclick="realizarPago()">Realizar el Pago</button>
            </div>
        </div>
    </div>
    
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
    
            cart.forEach((item, index) => {
                const cartItem = document.createElement('div');
                cartItem.className = 'cart-item';
                cartItem.innerHTML = `
                    <span>${item.name} - $${item.price} x </span>
                    <input type="number" min="1" value="${item.quantity}" onchange="updateQuantity(${index}, this.value)" />
                    <button onclick="removeFromCart(${index})">Eliminar</button>
                `;
                cartItemsContainer.appendChild(cartItem);
                total += item.price * item.quantity;
            });
    
            document.getElementById('total-price').innerText = `Total: $${total}`;
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
            alert("Procediendo al pago. Total: $" + cart.reduce((sum, item) => sum + item.price * item.quantity, 0));
            cart = []; // Vacía el carrito después del pago
            updateCart();
        }
    </script>
</section>



@endsection