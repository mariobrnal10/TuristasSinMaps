<?php

use App\Http\Controllers\controladorForms;
use App\Http\Controllers\controladorUsuarios;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\ControladorRecuperacion;
use App\Http\Controllers\HotelesController;
use App\Http\Controllers\VuelosController;
use App\Http\Controllers\Usuarios;
use App\Http\Controllers\Vuelos;
use App\Http\Controllers\Administradores;




Route::get('/', [ControladorVistas::class, 'inicio'])->name('rutaInicio');
Route::get('/registro', [controladorUsuarios::class, 'index'])->name('rutaRegistro');
Route::get('/home', [ControladorVistas::class, 'home'])->name('rutaHome');
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
Route::get('/administradores/nuevo', [controladorVistas::class, 'admin_nuevo'])->name('administrador_nuevo');

//admins Alonso
Route::post('/agregar/admin', [Administradores::class, 'store'])->name('administradores.create');
Route::get('/lista/admins', [Administradores::class, 'index'])->name('listarAdmins'); 
Route::delete('/cliente/{id}', [Administradores::class, 'destroy'])->name('cliente.destroy');
Route::post('/administradores/{id}', [Administradores::class, 'update'])->name('actualizarAdmin');

    //hoteles
Route::get('/lista/hoteles', [HotelesController::class, 'index'])->name('listarHoteles'); 
Route::delete('/hotel/{id}', [HotelesController::class, 'destroy'])->name('hotel.destroy');





//vuelos
Route::get('/lista/vuelos', [Vuelos::class, 'index'])->name('listarVuelos'); 
Route::delete('/vuelo/{id}', [Vuelos::class, 'destroy'])->name('vuelos.destroy');


//usuarios
Route::get('/lista/usuarios', [Usuarios::class, 'index'])->name('listarUsuarios'); 
Route::delete('/usuarios/{id}', [Usuarios::class, 'destroy'])->name('usuarios.destroy');






//ruta registrar usuarios
Route::post('/enviarRegistro', [controladorUsuarios::class, 'store'])->name('rutaRegistrar');

//ruta de verificacion
Route::post('/verificarCodigo', [controladorUsuarios::class, 'verificarCodigo'])->name('verificarCodigo');
Route::get('/verificacion', [ControladorVistas::class, 'verificacion'])->name('rutaVerificacion');


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

//vuelos
Route::post('/vuelos/buscar', [VuelosController::class, 'buscarVuelos'])->name('buscarVuelos');

// Agregar un vuelo al carrito
Route::post('/carrito/agregarVuelo', [CarritoController::class, 'agregarVuelo'])->name('carrito.agregarVuelo');

// Agregar un hotel al carrito
Route::post('/carrito/agregarHotel', [CarritoController::class, 'agregarHotel'])->name('carrito.agregarHotel');

//Rutas del Carritos
Route::get('/carrito', [CarritoController::class, 'listarCarrito'])->name('carrito.listar');
Route::post('/carrito/actualizarCantidad', [CarritoController::class, 'actualizarCantidad'])->name('carrito.actualizarCantidad');
Route::post('/carrito/eliminar', [CarritoController::class, 'eliminar'])->name('carrito.eliminar');
Route::post('/carrito/pagar', [CarritoController::class, 'pagar'])->name('carrito.pagar');





Route::get('/administradores/agregar', [controladorVistas::class, 'admin_nuevo'])->name('AdministracionAgregar');
Route::get('/PoliticaDePrivacidad', [ControladorVistas::class, 'Privacidad'])->name('rutaPrivacidad');

//carro
use App\Http\Controllers\FrontCarrito;

Route::get('/carrito',[FrontCarrito::class, 'index'])->name('carritoVista');

Route::post('/carrito/agregar',[CarritoController::class, 'add'])->name('carritoAgregar');
Route::get('/carrito/checkout',[CarritoController::class, 'checkout'])->name('carritoCheckout');
Route::get('/carrito/clear',[CarritoController::class, 'clear'])->name('carritoClear');
Route::post('/carrito/remove',[CarritoController::class, 'remove'])->name('carritoBorrar');






