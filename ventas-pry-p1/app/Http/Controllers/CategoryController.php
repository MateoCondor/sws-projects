<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

/**
 * Controlador para gestión de categorías
 * Solo accesible por usuarios con rol 'bodega'
 */
class CategoryController extends Controller
{
    /**
     * Mostrar listado de categorías
     */
    public function index()
    {
        $categories = Category::withCount('products')->orderBy('name')->get();
        return view('categories.index', compact('categories'));
    }

    /**
     * Mostrar formulario para crear nueva categoría
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Almacenar nueva categoría
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
        ]);

        Category::create([
            'name' => $request->name,
        ]);

        return redirect()->route('categories.index')
            ->with('success', 'Categoría creada exitosamente');
    }

    /**
     * Mostrar formulario para editar categoría
     */
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    /**
     * Actualizar categoría existente
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', Rule::unique('categories')->ignore($category->id)],
        ]);

        $category->update([
            'name' => $request->name,
        ]);

        return redirect()->route('categories.index')
            ->with('success', 'Categoría actualizada exitosamente');
    }

    /**
     * Eliminar categoría
     */
    public function destroy(Category $category)
    {
        // Verificar si la categoría tiene productos asociados
        if ($category->products()->count() > 0) {
            return back()->withErrors([
                'error' => 'No se puede eliminar una categoría que tiene productos asociados. Elimina primero los productos o cámbialos de categoría.'
            ]);
        }

        $categoryName = $category->name;
        $category->delete();

        return redirect()->route('categories.index')
            ->with('success', "Categoría '{$categoryName}' eliminada exitosamente");
    }
}