<?php
// Modelo para registrar las edades ingresadas por los usuarios para seguimiento
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EdadRegistro extends Model
{
    use HasFactory;

    // Nombre de la tabla en la base de datos
    protected $table = 'edad_registros';

    // Campos que se pueden llenar masivamente
    protected $fillable = [
        'edad',
        'ip_address',
        'clasificacion'
    ];

    // Desactivar timestamps predeterminados de Laravel (created_at, updated_at)
    public $timestamps = false;
}
