<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JovenesController extends Controller
{
    /**
     * Mostrar la vista para jóvenes adultos (18-25 años)
     */
    public function index()
    {
        return view('grupos.jovenes', [
            'titulo' => 'Portal para Jóvenes Adultos',
            'mensaje' => 'Bienvenido al portal de salud para jóvenes adultos (18-25 años)'
        ]);
    }
}
