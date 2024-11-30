@extends('layouts.plantilla2')
@section('titulo', 'Cancelacion')

@section('cancelar')

<<style>

    .terms-container {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin: 40px auto;
        max-width: 800px;
    }
</style>

<div class="registro-container" style="background-image: url('{{ asset('img/cancelar.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100vw; height: 120vh;">
    <div class="container">
        @session('exito')
        <script>
            Swal.fire({
                title: "¡Cancelación exitosa!",
                text: "¡Te vamos a extrañar!",
                icon: "success"
            });
        </script>
        @endsession

        <!-- Se agrega la clase 'terms-container' al formulario -->
        <form action="/enviarRegistro" method="POST" class="terms-container">
            @csrf

            <h2 class="text-center mb-3 font-weight-bold text-dark">
                <i class="bi bi-person-plus-fill"></i> Registro de cancelación
            </h2>

            <div class="text-center mb-3">
                <img src="img/iconcacell.png" alt="Logo" class="img-fluid rounded-circle shadow" style="max-width: 80px;">
            </div>
            <div class="mb-4">
                <h4 class="text-center text-dark font-weight-bold">{{ __('Detalles del vuelo') }}</h4>
                <input type="text" class="form-control form-control-sm shadow-sm mb-2" name="vuelo" placeholder="Vuelo" value="{{ old('vuelo') }}">
                <input type="text" class="form-control form-control-sm shadow-sm" name="aerolinea" placeholder="Aerolínea" value="{{ old('aerolinea') }}">
                <input type="text" class="form-control form-control-sm shadow-sm mb-2" name="fecha" placeholder="Fecha" value="{{ old('fecha') }}">
                <input type="text" class="form-control form-control-sm shadow-sm" name="total" placeholder="Total" value="{{ old('total') }}">

                <small class="fst-italic text-danger">{{ $errors->first('vuelo') }}</small>
            </div>

            <div class="mb-4">
                <h4 class="text-center text-dark font-weight-bold">{{ __('Detalles del hotel') }}</h4>
                <input type="text" class="form-control form-control-sm shadow-sm mb-2" name="lugar" placeholder="Lugar" value="{{ old('lugar') }}">
                <input type="text" class="form-control form-control-sm shadow-sm" name="hotel" placeholder="Hotel" value="{{ old('hotel') }}">
                <input type="text" class="form-control form-control-sm shadow-sm mb-2" name="noches" placeholder="Noches" value="{{ old('noches') }}">
                <input type="text" class="form-control form-control-sm shadow-sm" name="total" placeholder="Total" value="{{ old('total') }}">

                <small class="fst-italic text-danger">{{ $errors->first('hotel') }}</small>
            </div>

            <div class="mb-4">
                <h4 class="text-center text-dark font-weight-bold">{{ __('Motivo de cancelación') }}</h4>
                <input type="text" class="form-control form-control-sm shadow-sm mb-2" name="descripcion" placeholder="Descripción" value="{{ old('descripcion') }}">

            <div class="text-center mt-3">
                <button type="submit" class="btn btn-success btn-lg shadow-lg w-75">
                    {{__('Cancelar')}}
                </button>
            </div>
        </form>
    </div>
</div>

@endsection