@extends('layouts.plantilla')

@section('titulo', 'Nueva Contraseña')

@section('contenidoNuevaContraseña')
<div class="container mt-5">
    <h2 class="text-center">Nueva Contraseña</h2>

    <form action="{{ route('actualizarContrasena') }}" method="POST" class="mt-4">
        @csrf

        <div class="mb-3">
            <label for="password" class="form-label">Nueva Contraseña</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Ingresa tu nueva contraseña" required>
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirma tu nueva contraseña" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Actualizar Contraseña</button>
    </form>
</div>
@endsection
