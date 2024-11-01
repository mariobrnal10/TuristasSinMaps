<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;

Route::get('/', [ControladorVistas::class, 'inicio'])->name('rutaInicio');
Route::get('/login', [ControladorVistas::class, 'login'])->name('rutaLogin');
Route::get('/registro', [ControladorVistas::class, 'registro'])->name('rutaRegistro');
Route::get('/home', [ControladorVistas::class, 'home'])->name('rutaHome');
Route::get('/carrito', [ControladorVistas::class, 'carrito'])->name('rutaCarrito');


