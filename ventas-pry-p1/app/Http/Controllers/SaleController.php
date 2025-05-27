<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Controlador para gestión de ventas
 * Solo accesible por usuarios con rol 'cajera'
 */
class SaleController extends Controller
{
    /**
     * Mostrar listado de ventas del usuario autenticado
     */
    public function index()
    {
        $sales = Sale::with(['product.category', 'user'])
            ->where('user_id', auth()->id())
            ->orderBy('created_at', 'desc')
            ->get();
            
        return view('sales.index', compact('sales'));
    }

    /**
     * Mostrar formulario para crear nueva venta
     */
    public function create()
    {
        $products = Product::with('category')
            ->where('stock', '>', 0)
            ->orderBy('name')
            ->get();
            
        return view('sales.create', compact('products'));
    }

    /**
     * Almacenar nueva venta
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        try {
            DB::transaction(function () use ($request) {
                $product = Product::findOrFail($request->product_id);
                
                if ($product->stock < $request->quantity) {
                    throw new \Exception('Stock insuficiente');
                }

                $unitPrice = $product->price;
                $totalPrice = $unitPrice * $request->quantity;

                Sale::create([
                    'user_id' => auth()->id(),
                    'product_id' => $request->product_id,
                    'quantity' => $request->quantity,
                    'unit_price' => $unitPrice,
                    'total_price' => $totalPrice,
                ]);

                $product->decrement('stock', $request->quantity);
            });

            return redirect()->route('sales.index')
                ->with('success', 'Venta registrada exitosamente');
                
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Mostrar formulario para editar venta
     */
    public function edit(Sale $sale)
    {
        // Solo permitir editar ventas propias
        if ($sale->user_id !== auth()->id()) {
            abort(403, 'No tienes permisos para editar esta venta');
        }

        // Solo permitir editar ventas del día actual
        if (!$sale->created_at->isToday()) {
            return back()->withErrors(['error' => 'Solo se pueden editar ventas del día actual']);
        }

        $products = Product::with('category')->orderBy('name')->get();
        
        return view('sales.edit', compact('sale', 'products'));
    }

    /**
     * Actualizar venta existente
     */
    public function update(Request $request, Sale $sale)
    {
        // Verificar permisos
        if ($sale->user_id !== auth()->id()) {
            abort(403, 'No tienes permisos para editar esta venta');
        }

        if (!$sale->created_at->isToday()) {
            return back()->withErrors(['error' => 'Solo se pueden editar ventas del día actual']);
        }

        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        try {
            DB::transaction(function () use ($request, $sale) {
                $newProduct = Product::findOrFail($request->product_id);
                $oldProduct = $sale->product;

                // Restaurar stock del producto original
                $oldProduct->increment('stock', $sale->quantity);

                // Verificar stock disponible del nuevo producto
                $availableStock = $newProduct->stock;
                if ($availableStock < $request->quantity) {
                    throw new \Exception("Stock insuficiente. Disponible: {$availableStock}");
                }

                // Actualizar la venta
                $unitPrice = $newProduct->price;
                $totalPrice = $unitPrice * $request->quantity;

                $sale->update([
                    'product_id' => $request->product_id,
                    'quantity' => $request->quantity,
                    'unit_price' => $unitPrice,
                    'total_price' => $totalPrice,
                ]);

                // Decrementar stock del nuevo producto
                $newProduct->decrement('stock', $request->quantity);
            });

            return redirect()->route('sales.index')
                ->with('success', 'Venta actualizada exitosamente');
                
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Eliminar venta
     */
    public function destroy(Sale $sale)
    {
        // Solo permitir eliminar ventas propias
        if ($sale->user_id !== auth()->id()) {
            abort(403, 'No tienes permisos para eliminar esta venta');
        }

        // Solo permitir eliminar ventas del día actual
        if (!$sale->created_at->isToday()) {
            return back()->withErrors(['error' => 'Solo se pueden eliminar ventas del día actual']);
        }

        try {
            DB::transaction(function () use ($sale) {
                // Restaurar stock del producto
                $sale->product->increment('stock', $sale->quantity);
                
                // Eliminar la venta
                $sale->delete();
            });

            return redirect()->route('sales.index')
                ->with('success', 'Venta eliminada exitosamente y stock restaurado');
                
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Error al eliminar la venta: ' . $e->getMessage()]);
        }
    }
}