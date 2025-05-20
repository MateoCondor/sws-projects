<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuenta;

class CuentaController extends Controller
{
    function index()
    {
        return view('cuentas.index');
    }

    function procesar(Request $request)
    {
        $usuario = $request->input('usuario');
        $cuenta = Cuenta::where('usuario', $usuario)->first();

        return view('cuentas.index', ['cuenta' => $cuenta]);
    }
}


