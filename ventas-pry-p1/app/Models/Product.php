<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Modelo para los productos del inventario
 */
class Product extends Model
{
    /**
     * Campos que se pueden asignar masivamente
     */
    protected $fillable = [
        'name',
        'price',
        'stock',
        'category_id',
    ];

    /**
     * Conversión de tipos para los campos
     */
    protected $casts = [
        'price' => 'decimal:2',
        'stock' => 'integer',
        'category_id' => 'integer',
    ];

    /**
     * Relación: El producto pertenece a una categoría
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Relación: El producto puede tener muchas ventas
     */
    public function sales(): HasMany
    {
        return $this->hasMany(Sale::class);
    }

    /**
     * Scope: Productos con stock disponible
     */
    public function scopeAvailable($query)
    {
        return $query->where('stock', '>', 0);
    }

    /**
     * Scope: Productos con stock bajo (<=10)
     */
    public function scopeLowStock($query)
    {
        return $query->where('stock', '>', 0)->where('stock', '<=', 10);
    }

    /**
     * Scope: Productos sin stock
     */
    public function scopeOutOfStock($query)
    {
        return $query->where('stock', 0);
    }

    /**
     * Accessor: Estado del stock
     */
    public function getStockStatusAttribute(): string
    {
        if ($this->stock == 0) {
            return 'Sin Stock';
        } elseif ($this->stock <= 10) {
            return 'Stock Bajo';
        } else {
            return 'Disponible';
        }
    }

    /**
     * Accessor: Color del estado del stock
     */
    public function getStockStatusColorAttribute(): string
    {
        if ($this->stock == 0) {
            return 'red';
        } elseif ($this->stock <= 10) {
            return 'yellow';
        } else {
            return 'green';
        }
    }
}