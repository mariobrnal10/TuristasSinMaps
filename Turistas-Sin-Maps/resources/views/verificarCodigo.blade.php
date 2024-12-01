@extends('layouts.plantilla')

@section('titulo', 'Verificar Código')

@section('contenidoVerificarCodigo')
<div class="container mt-5">
    <h2 class="text-center">Verificar Código</h2>

    <form action="{{ route('verificarCodigoRecuperacion') }}" method="POST" class="mt-4">
        @csrf

        <div class="mb-3">
            <label for="codigo" class="form-label">Código de Verificación</label>
            <input type="text" name="codigo" id="codigo" class="form-control" placeholder="Ingresa el código" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Verificar</button>
    </form>
</div>
@endsection
