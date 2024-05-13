<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//agregar ruta para el softdelete

class tareas extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo', 
        'descripcion',
        'categoria',
        'fecha_entrega',
    ];

}
