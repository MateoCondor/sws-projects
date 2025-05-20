<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdultosController extends Controller
{
    /**
     * Mostrar la vista para adultos (26-59 años)
     */
    public function index()
    {
        return view('grupos.adultos', [
            'titulo' => 'Portal para Adultos',
            'mensaje' => 'Bienvenido al portal de salud para adultos (26-59 años)'
        ]);
    }
}
