@extends('layouts.plantilla')

@section('titulo', 'Registro')

@section('css-login')
    <link rel="stylesheet" href="{{asset('css/registrar.css')}}">
@endsection

@section('contenidoRegistro')




<div class="registro-container" style="background-image: url('{{ asset('img/travel.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100vw; height: 120vh;">
    <div class="container">
        @session('exito')
    <script>
        Swal.fire({
            title: "Registro exitoso!",
            text: "Que Tenga una Buena Experiencia!",
            icon: "success"
        });
    </script>    
    @endsession
    <form action="{{ route('rutaRegistrar_admin') }}" method="POST">
        @csrf
        <h2 class="text-center mb-3 font-weight-bold text-dark">
            <i class="bi bi-person-plus-fill"></i> Registro
        </h2>
    
        <div class="text-center mb-3">
            <img src="img/agregar.png" alt="Logo" class="img-fluid rounded-circle shadow" style="max-width: 80px;">
        </div>
    
        <div class="mb-2">
            <label for="nombre" class="form-label text-dark font-weight-semibold">{{__('Nombre')}}</label>
            <input type="text" class="form-control form-control-sm shadow-sm" name="nombre" value="{{ old('nombre') }}" required>
            <small class="fst-italic text-danger">{{ $errors->first('nombre') }}</small>
        </div>
    
        <div class="mb-2">
            <label for="apellido" class="form-label text-dark font-weight-semibold">{{__('Apellido')}}</label>
            <input type="text" class="form-control form-control-sm shadow-sm" name="apellido" value="{{ old('apellido') }}" required>
            <small class="fst-italic text-danger">{{ $errors->first('apellido') }}</small>
        </div>
    
        <div class="mb-2">
            <label for="email" class="form-label text-dark font-weight-semibold">{{__('Correo')}}</label>
            <input type="email" class="form-control form-control-sm shadow-sm" name="email" value="{{ old('email') }}" required>
            <small class="fst-italic text-danger">{{ $errors->first('email') }}</small>
        </div>
    
        <div class="mb-2">
            <label for="contraseña" class="form-label text-dark font-weight-semibold">{{__('Contraseña')}}</label>
            <input type="password" class="form-control form-control-sm shadow-sm" name="contraseña" required>
            <small class="fst-italic text-danger">{{ $errors->first('contraseña') }}</small>
        </div>
    
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-success btn-lg shadow-lg w-75">
                {{__('Guardar Registro')}}
            </button>
        </div>
    </form>
    
    


        </form>
    </div>

</div>
    
@endsection


