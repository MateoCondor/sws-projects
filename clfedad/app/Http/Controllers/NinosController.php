<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NinosController extends Controller
{
    /**
     * Mostrar la vista para niños (6-12 años)
     */
    public function index()
    {
        return view('grupos.ninos', [
            'titulo' => 'Portal para Niños',
            'mensaje' => 'Bienvenido al portal de salud para niños (6-12 años)'
        ]);
    }
}
