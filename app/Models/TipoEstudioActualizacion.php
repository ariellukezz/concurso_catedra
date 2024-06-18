<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoEstudioActualizacion extends Model
{
    use HasFactory;

    protected $table = 'tipos_estudio_actualizacion';

    protected $fillable = [
        'descripcion',
        'estado'
    ];
}
