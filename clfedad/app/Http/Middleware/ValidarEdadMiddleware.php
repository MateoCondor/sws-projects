<?php

namespace App\Http\Middleware;

use App\Models\EdadRegistro;
use App\Services\AgeRouterService;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidarEdadMiddleware
{
    /**
     * El servicio para manejar la lógica de clasificación de edades
     */
    protected $ageRouterService;

    /**
     * Constructor
     */
    public function __construct(AgeRouterService $ageRouterService)
    {
        $this->ageRouterService = $ageRouterService;
    }    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Obtener la ruta actual
        $currentPath = $request->path();
        
        // Lista de rutas protegidas que requieren validación de edad
        $rutasProtegidas = ['bebes', 'ninos', 'adolescentes', 'jovenes', 'adultos', 'mayores', 'longevos'];
        
        // Verificar si la ruta actual es una de las protegidas
        if (in_array($currentPath, $rutasProtegidas)) {
            // Si no hay una sesión con edad validada, redirigir a error
            if (!session()->has('edad_validada') || !session()->has('ruta_autorizada')) {
                return redirect('/edad/error')->with('mensaje', 'Debe ingresar su edad primero');
            }
            
            // Si la ruta a la que intenta acceder no es la que le corresponde según su edad
            if ('/' . $currentPath !== session('ruta_autorizada')) {
                return redirect('/edad/error')->with('mensaje', 'No tiene acceso a esta sección');
            }
        }
        
        // Si es la ruta de procesamiento de edad
        if ($currentPath === 'procesar-edad') {
            // Validar que la edad esté presente y sea numérica
            if (!$request->has('edad') || !is_numeric($request->edad)) {
                return redirect('/edad/error')->with('mensaje', 'La edad es requerida y debe ser un número');
            }
            
            $edad = (int) $request->edad;
            
            // Obtener clasificación y ruta usando el servicio
            $resultado = $this->ageRouterService->clasificarEdad($edad);
            
            // Registrar en la base de datos
            EdadRegistro::create([
                'edad' => $edad,
                'clasificacion' => $resultado['clasificacion'],
                'ip_address' => $request->ip()
            ]);
            
            // Guardar en sesión para permitir acceso a rutas protegidas
            session(['edad_validada' => true, 'ruta_autorizada' => $resultado['ruta']]);
            
            // Redirigir a la ruta correspondiente según la edad
            return redirect($resultado['ruta']);
        }
        
        // Para cualquier otra ruta, permitir el acceso
        return $next($request);
    }
}
