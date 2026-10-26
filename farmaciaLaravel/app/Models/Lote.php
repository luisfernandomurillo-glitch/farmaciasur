<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lote extends Model
{
    protected $fillable = [
        'nombre_producto',
        'cantidad',
        'precio_unitario',
        'descripcion',
        'fecha_ingreso',
        'fecha_caducidad',
        'laboratorio',
        'disponible',
    ];

    protected function casts(): array{
        return [
            'fecha_ingreso'   => 'date',
            'fecha_caducidad' => 'date',
            'precio_unitario' => 'decimal:2',
            'disponible'      => 'boolean',
        ];
    }
}
