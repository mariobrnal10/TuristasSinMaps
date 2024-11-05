<?php

use App\Http\Controllers\controladorForms;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;

Route::get('/', [ControladorVistas::class, 'inicio'])->name('rutaInicio');
Route::get('/login', [ControladorVistas::class, 'login'])->name('rutaLogin');
Route::get('/registro', [ControladorVistas::class, 'registro'])->name('rutaRegistro');
Route::get('/home', [ControladorVistas::class, 'home'])->name('rutaHome');
Route::get('/carrito', [ControladorVistas::class, 'carrito'])->name('rutaCarrito');
Route::get('/usuario', [ControladorVistas::class, 'usuario'])->name('rutaUsuario');
Route::get('/vuelos', [ControladorVistas::class, 'vuelos'])->name('rutaVuelos');
Route::get('/busVuelo', [ControladorVistas::class, 'busqueda_Vuelos'])->name('rutaBVuelos');
Route::get('/busHotel', [ControladorVistas::class, 'busqueda_hoteles'])->name('rutaHoteles');
Route::get('/confirmacion', [ControladorVistas::class, 'confirmar_compra'])->name('rutaCompra');
Route::get('/cancelacion', [ControladorVistas::class, 'cancelar'])->name('rutaCancelar');
Route::get('/serAdmin', [ControladorVistas::class, 'serviciosAdmin'])->name('rutaSerAdm');
Route::get('/usuarioAdmin', [ControladorVistas::class, 'serviciosUsuario'])->name('rutaSerUsuario');
Route::get('/tarifas', [ControladorVistas::class, 'tarifas'])->name('rutaTerminos');
Route::post('/enviarRegistro', [controladorForms::class, 'Registro'])->name('rutaRegistrar');
Route::post('/inicioSesion', [controladorForms::class, 'InicioSesion'])->name('rutaSesion');
Route::post('/enviarCambios', [controladorForms::class, 'Cambios'])->name('rutaCambios');