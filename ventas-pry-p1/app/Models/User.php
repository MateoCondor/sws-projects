<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Relación: El usuario puede tener muchas ventas (si es cajera)
     */
    public function sales(): HasMany
    {
        return $this->hasMany(Sale::class);
    }

    /**
     * Accessor: Obtener el nombre del rol principal
     */
    public function getRoleNameAttribute(): string
    {
        return $this->roles->first()?->name ?? 'Sin rol';
    }

    /**
     * Accessor: Verificar si puede gestionar usuarios
     */
    public function getCanManageUsersAttribute(): bool
    {
        return $this->hasAnyRole(['admin', 'secre']);
    }

    /**
     * Accessor: Verificar si puede gestionar inventario
     */
    public function getCanManageInventoryAttribute(): bool
    {
        return $this->hasRole('bodega');
    }

    /**
     * Accessor: Verificar si puede registrar ventas
     */
    public function getCanMakeSalesAttribute(): bool
    {
        return $this->hasRole('cajera');
    }
}