<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    function index()
    {
        return view('usuarios.index');
    }

    public function procesar(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $sqlUser=DB::select("SELECT * FROM users WHERE email = '$email' AND password = '$password' ");

        if($sqlUser){
            return $sqlUser;
        }else{
            return 'NO EXISTE USUARIO';
        }
    }
}
