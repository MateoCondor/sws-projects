<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MayoresController extends Controller
{
    /**
     * Mostrar la vista para adultos mayores (60-74 años)
     */
    public function index()
    {
        return view('grupos.mayores', [
            'titulo' => 'Portal para Adultos Mayores',
            'mensaje' => 'Bienvenido al portal de salud para adultos mayores (60-74 años)'
        ]);
    }
}
