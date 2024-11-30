@extends('layouts.plantilla')

@section('titulo', 'inicio')

@section('contenidoRegistro')



<style>
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

<div class="registro-container" style="background-image: url('{{ asset('img/travel.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100vw; height: 120vh;">
    <div class="container">
        @session('exito')
        <script>
            Swal.fire({
                title: "Reporte mandado de forma exitosa!",
                text: "Que Tenga una Buena Experiencia!",
                icon: "success"
            });
        </script>
        @endsession

        <!-- Se agrega la clase 'terms-container' al formulario -->
        <form action="/enviarRegistro" method="POST" class="terms-container">
            @csrf

            <h2 class="text-center mb-3 font-weight-bold text-dark">
                <i class="bi bi-person-plus-fill"></i> Contacto
            </h2>

            <div class="text-center mb-3">
                <img src="img/agregar.png" alt="Logo" class="img-fluid rounded-circle shadow" style="max-width: 80px;">
            </div>

            <div class="mb-2">
                <label for="nombre" class="form-label text-dark font-weight-semibold">{{__('Nombre de usuario')}}</label>
                <input type="text" class="form-control form-control-sm shadow-sm" name="nombre" value="{{old('nombre')}}">
                <small class="fst-italic text-danger">{{$errors->first('nombre')}}</small>
            </div>

            <div class="mb-2">
                <label for="correo" class="form-label text-dark font-weight-semibold">{{__('Correo de contacto')}}</label>
                <input type="text" class="form-control form-control-sm shadow-sm" name="correo" value="{{old('correo')}}">
                <small class="fst-italic text-danger">{{$errors->first('correo')}}</small>
            </div>

            <div class="mb-2">
                <label for="contraseña" class="form-label text-dark font-weight-semibold">{{__('Situacion')}}</label>
                <input type="text" class="form-control form-control-sm shadow-sm" name="contraseña" value="{{old('contraseña')}}">
                <small class="fst-italic text-danger">{{$errors->first('contraseña')}}</small>
            </div>

            <div class="text-center mt-3">
                <button type="submit" class="btn btn-success btn-lg shadow-lg w-75">
                    {{__('Mandar reporte')}}
                </button>
            </div>
        </form>
    </div>
</div>

    
@endsection