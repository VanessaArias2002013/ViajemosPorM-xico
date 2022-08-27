<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LuTuristico extends Model
{
    use HasFactory;
    protected $fillable=['nombre','descripcion','ubicación','como_llegar','recomendaciones','horarios_de_visitas',
    'restricciones','costo','insertar_fotos'];
}

