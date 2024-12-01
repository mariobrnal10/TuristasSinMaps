@extends('layouts.plantilla')

@section('contenidoVerificacion')
<div class="container mt-5">
    <h2 class="text-center">Verificación de correo</h2>
    <p class="text-center">Hemos enviado un código de verificación al correo <strong>{{ session('email') }}</strong>. Ingresa el código para completar el registro.</p>

    <form action="{{ route('verificarCodigo') }}" method="POST" class="mt-4">
        @csrf

        <!-- Mostrar mensaje de error si hay fallos -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mb-3">
            <label for="codigo" class="form-label">Código de verificación</label>
            <input type="text" name="codigo" class="form-control" placeholder="Ingresa tu código" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Verificar</button>
    </form>
</div>
@endsection
