@extends('layouts.plantilla')

@section('titulo', 'Recuperar Contraseña')

@section('contenidoRecuperar')
<div class="container mt-5">
    <h2 class="text-center">Recuperar Contraseña</h2>

    <form action="{{ route('enviarCodigoRecuperacion') }}" method="POST" class="mt-4">
        @csrf
    
        <div class="mb-3">
            <label for="metodo" class="form-label">Método de recuperación</label>
            <select name="metodo" id="metodo" class="form-select" required onchange="mostrarCampo()">
                <option value="">Selecciona un método</option>
                <option value="email">Correo Electrónico</option>
                <option value="sms">Mensaje de Texto</option>
            </select>
        </div>
    
        <!-- Campo para correo electrónico -->
        <div class="mb-3" id="campoCorreo" style="display: none;">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Ingresa tu correo">
        </div>
    
        <!-- Campo para número de teléfono -->
        <div class="mb-3" id="campoTelefono" style="display: none;">
            <label for="telefono" class="form-label">Número de Teléfono</label>
            <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Ingresa tu número de teléfono">
        </div>
    
        <button type="submit" class="btn btn-primary w-100">Enviar Código</button>
    </form>
    
    <script>
        function mostrarCampo() {
            const metodo = document.getElementById('metodo').value;
            const campoCorreo = document.getElementById('campoCorreo');
            const campoTelefono = document.getElementById('campoTelefono');
    
            campoCorreo.style.display = metodo === 'email' ? 'block' : 'none';
            campoTelefono.style.display = metodo === 'sms' ? 'block' : 'none';
        }
    </script>
    
@endsection
