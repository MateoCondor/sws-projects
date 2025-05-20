<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BebesController;
use App\Http\Controllers\NinosController;
use App\Http\Controllers\AdolescentesController;
use App\Http\Controllers\JovenesController;
use App\Http\Controllers\AdultosController;
use App\Http\Controllers\MayoresController;
use App\Http\Controllers\LongevosController;
use App\Http\Controllers\EdadErrorController;

// Aplicar el middleware a todas las rutas
Route::middleware([\App\Http\Middleware\ValidarEdadMiddleware::class])->group(function () {
    // Ruta principal - Formulario de ingreso de edad
    Route::get('/', function () {
        return view('inicio');
    })->name('inicio');

    // Ruta para procesar la edad
    Route::get('/procesar-edad', function () {
        // Esta función nunca se ejecutará porque el middleware redirige
        return null;
    })->name('procesar.edad');

    // Agrupar las rutas de destino por categorías
    Route::prefix('')->group(function () {
        // Rutas para infantes y niños
        Route::get('/bebes', [BebesController::class, 'index'])->name('bebes');
        Route::get('/ninos', [NinosController::class, 'index'])->name('ninos');
        
        // Rutas para adolescentes y jóvenes
        Route::get('/adolescentes', [AdolescentesController::class, 'index'])->name('adolescentes');
        Route::get('/jovenes', [JovenesController::class, 'index'])->name('jovenes');
        
        // Rutas para adultos
        Route::get('/adultos', [AdultosController::class, 'index'])->name('adultos');
        
        // Rutas para personas mayores
        Route::get('/mayores', [MayoresController::class, 'index'])->name('mayores');
        Route::get('/longevos', [LongevosController::class, 'index'])->name('longevos');
        
        // Ruta para errores de edad
        Route::get('/edad/error', [EdadErrorController::class, 'index'])->name('edad.error');
    });
});
