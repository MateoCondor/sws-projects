<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BebesController extends Controller
{
    /**
     * Mostrar la vista para bebés (0-5 años)
     */
    public function index()
    {
        return view('grupos.bebes', [
            'titulo' => 'Portal para Bebés',
            'mensaje' => 'Bienvenido al portal de salud para bebés (0-5 años)'
        ]);
    }
}
