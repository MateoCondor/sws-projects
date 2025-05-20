<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EdadErrorController extends Controller
{    /**
     * Mostrar la vista de error para edades inválidas
     */
    public function index()
    {
        $mensaje = session('mensaje') ?? 'La edad proporcionada no es válida. Debe estar entre 0 y 120 años.';
        
        return view('grupos.error', [
            'titulo' => 'Error de Edad',
            'mensaje' => $mensaje
        ]);
    }
}
