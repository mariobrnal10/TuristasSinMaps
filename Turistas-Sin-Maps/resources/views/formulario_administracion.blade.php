@extends('layouts.plantilla_admin')

@section('titulo','Formulario')
@section('formularioAdmin')

<div class="container mt-5 col-md-6">

    @if (session('success'))
        <x-alert tipo="success"> {{ session('success') }} </x-alert>
        <script>
            Swal.fire({
                title: "¡Éxito!",
                text: "{{ session('success') }}",
                icon: "success",
            });
        </script>
    @endif

    <div class="card font-monospace">
        <div class="card-header fs-5 text-center text-primary">
            {{ __('Actualizar Administrador') }}
        </div>
        <div class="card-body text-justify">
            <form action="{{ route('enviarAdmin') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
                    <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}">
                    <small class="fst-italic text-danger">{{ $errors->first('nombre') }}</small>
                </div>

                <div class="mb-3">
                    <label for="apellido" class="form-label">{{ __('Apellido') }}</label>
                    <input type="text" class="form-control" name="apellido" value="{{ old('apellido') }}">
                    <small class="fst-italic text-danger">{{ $errors->first('apellido') }}</small>
                </div>

                <div class="mb-3">
                    <label for="correo" class="form-label">{{ __('Correo') }}</label>
                    <input type="email" class="form-control" name="correo" value="{{ old('correo') }}">
                    <small class="fst-italic text-danger">{{ $errors->first('correo') }}</small>
                </div>

                <div class="mb-3">
                    <label for="contraseña" class="form-label">{{ __('Contraseña') }}</label>
                    <input type="password" class="form-control" name="contraseña">
                    <small class="fst-italic text-danger">{{ $errors->first('contraseña') }}</small>
                </div>

                <div class="card-footer text-muted">
                    <div class="d-grid gap-2 mt-2 mb-1">
                        <button type="submit" class="btn btn-primary btn-sm">{{ __('Actualizar Admin') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
