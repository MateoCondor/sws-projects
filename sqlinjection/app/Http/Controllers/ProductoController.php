<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    // Muestra la vista con el formulario de búsqueda
    public function index()
    {
        return view('productos.index');
    }

    // Método inseguro vulnerable a SQL Injection
    public function buscarInseguro(Request $request)
    {
        $campo = $request->input('campo');
        $valor = $request->input('valor');
        
        // Esta consulta es vulnerable a SQL Injection
        $sql = "SELECT * FROM productos WHERE $campo = '$valor'";
        $resultados = DB::select($sql);
        
        return view('productos.index', [
            'resultados' => $resultados, 
            'sql' => $sql,
            'tipo' => 'inseguro'
        ]);
    }

    // Método seguro usando Eloquent (protege contra SQL Injection)
    public function buscarSeguro(Request $request)
    {
        $campo = $request->input('campo');
        $valor = $request->input('valor');
        
        // Esta consulta es segura contra SQL Injection
        $resultados = Producto::where($campo, $valor)->get();
        
        // Obtenemos la consulta SQL generada para mostrarla
        $query = DB::getQueryLog();
        $ultimaConsulta = end($query);
        $sql = $ultimaConsulta['query'];
        
        return view('productos.index', [
            'resultados' => $resultados, 
            'sql' => $sql,
            'tipo' => 'seguro'
        ]);
    }

    // Método para insertar datos de ejemplo
    public function crearDatosEjemplo()
    {
        Producto::create(['nombre' => 'Laptop', 'precio' => 1200.00]);
        Producto::create(['nombre' => 'Smartphone', 'precio' => 800.00]);
        Producto::create(['nombre' => 'Tablet', 'precio' => 500.00]);
        Producto::create(['nombre' => 'Monitor', 'precio' => 300.00]);
        
        return redirect()->route('productos.index')->with('mensaje', 'Datos de ejemplo creados correctamente');
    }
}
