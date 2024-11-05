@extends('layouts.plantilla')

@section('titulo', 'Registro')

@section('css-login')
    <link rel="stylesheet" href="{{asset('css/registrar.css')}}">
@endsection

@section('contenidoRegistro')




<div class="registro-container" style="background-image: url('{{ asset('img/INICIO.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100vw; height: 100vh;">
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
        <form action="/enviarRegistro" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="nombre" class="form-label">{{__('Nombre')}}</label>
                <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}">
                <small class="fst-italic text-danger">{{$errors->first('nombre')}}</small>
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">{{__('Apellido')}}</label>
                <input type="text" class="form-control" name="apellido" value="{{old('apellido')}}">
                <small class="fst-italic text-danger">{{$errors->first('apellido')}}</small>
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">{{__('Telefono')}} </label>
                <input type="text" class="form-control" name="telefono" value="{{old('telefono')}}">
                <small class="fst-italic text-danger">{{$errors->first('telefono')}}</small>
            </div>

            <div class="mb-3">
                <label for="correo" class="form-label">{{__('Correo')}}</label>
                <input type="text" class="form-control" name="correo" value="{{old('correo')}}">
                <small class="fst-italic text-danger">{{$errors->first('correo')}}</small>
            </div>
            
            <div class="mb-3">
                <label for="contraseña" class="form-label">{{__('Contraseña')}} </label>
                <input type="text" class="form-control" name="contraseña" value="{{old('contraseña')}}">
                <small class="fst-italic text-danger">{{$errors->first('contraseña')}}</small>
            </div>
            <div class="card-footer text-muted">
                <div class="d-grid gap-2 mt-2 mb-1">
                    <button type="submit" class="btn btn-success btn-sm">{{__('Guardar Registro')}}</button>
                </div>
            </div>
        </form>
    </div>

</div>


    
@endsection