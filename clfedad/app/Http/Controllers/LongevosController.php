<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LongevosController extends Controller
{
    /**
     * Mostrar la vista para personas longevas (75-120 años)
     */
    public function index()
    {
        return view('grupos.longevos', [
            'titulo' => 'Portal para Personas Longevas',
            'mensaje' => 'Bienvenido al portal de salud para personas longevas (75-120 años)'
        ]);
    }
}
