<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Modelo Category - Gestiona las categorías de productos
 */
class Category extends Model
{
    use HasFactory;

    /**
     * Atributos que pueden ser asignados en masa
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Relación: Una categoría tiene muchos productos
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}