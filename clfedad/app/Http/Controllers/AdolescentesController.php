<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdolescentesController extends Controller
{
    /**
     * Mostrar la vista para adolescentes (13-17 años)
     */
    public function index()
    {
        return view('grupos.adolescentes', [
            'titulo' => 'Portal para Adolescentes',
            'mensaje' => 'Bienvenido al portal de salud para adolescentes (13-17 años)'
        ]);
    }
}
