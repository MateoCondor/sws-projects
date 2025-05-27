<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

/**
 * Controlador para gestión de productos
 * Solo accesible por usuarios con rol 'bodega'
 */
class ProductController extends Controller
{
    /**
     * Mostrar listado de productos con sus categorías
     */
    public function index()
    {
        $products = Product::with('category')->orderBy('name')->get();
        return view('products.index', compact('products'));
    }

    /**
     * Mostrar formulario para crear nuevo producto
     */
    public function create()
    {
        $categories = Category::orderBy('name')->get();
        return view('products.create', compact('categories'));
    }

    /**
     * Almacenar nuevo producto
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0|max:999999.99',
            'stock' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('products.index')
            ->with('success', 'Producto creado exitosamente');
    }

    /**
     * Mostrar formulario para editar producto
     */
    public function edit(Product $product)
    {
        // Cargar relaciones necesarias
        $product->load(['category', 'sales']);
        $categories = Category::orderBy('name')->get();
        
        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Actualizar producto existente
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0|max:999999.99',
            'stock' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('products.index')
            ->with('success', 'Producto actualizado exitosamente');
    }

    /**
     * Eliminar producto
     */
    public function destroy(Product $product)
    {
        // Verificar si el producto tiene ventas registradas
        if ($product->sales()->count() > 0) {
            return back()->withErrors([
                'error' => 'No se puede eliminar un producto que tiene ventas registradas en el historial.'
            ]);
        }

        $productName = $product->name;
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', "Producto '{$productName}' eliminado exitosamente");
    }
}