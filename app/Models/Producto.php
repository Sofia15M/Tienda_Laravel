<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos'; // Asegúrate de que el nombre de la tabla es correcto

    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre_producto',
        'tipo_producto',
        'precio_producto',
    ];

    public $timestamps = false;
}
