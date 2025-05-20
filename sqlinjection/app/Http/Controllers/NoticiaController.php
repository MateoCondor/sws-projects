<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    function index(Request $request)
    {   
        $noticias = Noticia::get();
        
        return view('noticias.index',['noticias' => $noticias]);
    }

    function guardar(Request $request)
    {

        
        $noticia = new Noticia();
        $noticia->contenido = $request->contenido;
        $noticia->save();
        
        return redirect()->route('noticias.index');
    }
}
