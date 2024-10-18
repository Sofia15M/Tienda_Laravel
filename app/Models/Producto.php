<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $primaryKey = 'id_producto';

    protected $fillable = [
        'id_producto',
        'nombre_producto',
        'tipo_producto',
        'precio_producto'
    ];
}
