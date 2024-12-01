<?php

use App\Http\Controllers\controladorForms;
use App\Http\Controllers\controladorUsuarios;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;

Route::get('/', [ControladorVistas::class, 'inicio'])->name('rutaInicio');
Route::get('/registro', [controladorUsuarios::class, 'index'])->name('rutaRegistro');
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
Route::get('/adminVuelos', [controladorVistas::class, 'admin_vuelos'])->name('AdministracionVuelos');
Route::get('/adminHoteles', [controladorVistas::class, 'admin_hoteles'])->name('AdministracionHoteles');
Route::get('/administradores', [controladorVistas::class, 'admin_agregar'])->name('Administracion');
Route::get('/terminos', [ControladorVistas::class, 'terminos'])->name('rutaTerminos');
Route::get('/contacto', [controladorVistas::class, 'formContacto'])->name('rutaContacto');

//ruta registrar usuarios
Route::post('/enviarRegistro', [controladorUsuarios::class, 'store'])->name('rutaRegistrar');

//ruta de verificacion
Route::post('/verificarCodigo', [controladorUsuarios::class, 'verificarCodigo'])->name('verificarCodigo');
Route::get('/verificacion', [ControladorVistas::class, 'verificacion'])->name('rutaVerificacion');

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ControladorRecuperacion;
use App\Http\Controllers\HotelesController;

// Ruta para el formulario de login
Route::get('/login', [ControladorVistas::class, 'login'])->name('rutaLogin');

// Ruta para procesar el inicio de sesión
Route::post('/inicioSesion', [AuthController::class, 'login'])->name('rutaSesion');

// Ruta para el cierre de sesión
Route::post('/logout', [AuthController::class, 'logout'])->name('rutaLogout');

Route::get('/recuperar/verificarCodigo', [ControladorRecuperacion::class, 'mostrarFormularioVerificarCodigo'])->name('verificarCodigoRecuperacion');



// Ruta para mostrar la vista de recuperación
Route::get('/recuperar', [ControladorRecuperacion::class, 'mostrarFormulario'])->name('rutaRecuperarContrasena');

// Ruta para enviar el código de recuperación
Route::post('/recuperar/enviarCodigo', [ControladorRecuperacion::class, 'enviarCodigo'])->name('enviarCodigoRecuperacion');

// Ruta para verificar el código de recuperación
Route::post('/recuperar/verificarCodigo', [ControladorRecuperacion::class, 'verificarCodigo'])->name('verificarCodigoRecuperacion');

// Ruta para mostrar el formulario para ingresar la nueva contraseña
Route::get('/recuperar/nuevaContrasena', [ControladorRecuperacion::class, 'mostrarFormularioNuevaContrasena'])->name('formNuevaContrasena');

// Ruta para actualizar la contraseña
Route::post('/recuperar/actualizarContrasena', [ControladorRecuperacion::class, 'actualizarContrasena'])->name('actualizarContrasena');

//rutas de busqueda de hoteles y vuelos
//hoteles
Route::post('/hoteles/buscar', [HotelesController::class, 'buscarHoteles'])->name('buscarHoteles');








Route::get('/administradores/agregar', [controladorVistas::class, 'admin_nuevo'])->name('AdministracionAgregar');
Route::get('/PoliticaDePrivacidad', [ControladorVistas::class, 'Privacidad'])->name('rutaPrivacidad');



