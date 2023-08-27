<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['Nombre', 'Apellido', 'Edad', 'Puesto', 'Ruta', 'Grado_Academico', 'Fecha_ingreso', 'image_path'];
}
