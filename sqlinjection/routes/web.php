<?php
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CuentaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\NoticiaController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios', [ UsuarioController::class, 'index']);
Route::post('/usuarios-procesar', [ UsuarioController::class, 'procesar'])->name('user.procesar');

Route::get('/cuentas', [ CuentaController::class, 'index']);
Route::post('/cuentas-procesar', [ CuentaController::class, 'procesar'])->name('cuentas.procesar');

Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
Route::post('/productos-buscar-inseguro', [ProductoController::class, 'buscarInseguro'])->name('productos.buscarInseguro');
Route::post('/productos-buscar-seguro', [ProductoController::class, 'buscarSeguro'])->name('productos.buscarSeguro');
Route::get('/productos-crear-datos-ejemplo', [ProductoController::class, 'crearDatosEjemplo'])->name('productos.crearDatosEjemplo');

Route::get('/noticias',[NoticiaController::class,'index']) -> name ('noticias.index');
Route::post('/guardar-comentario',[NoticiaController::class,'guardar']) -> name ('noticias.guardar');