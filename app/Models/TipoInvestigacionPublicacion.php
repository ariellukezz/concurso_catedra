<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoInvestigacionPublicacion extends Model
{
    use HasFactory;

    protected $table = 'tipo_investigacion_publicacion';

    protected $fillable = [
        'descripcion',
        'estado',
        'participacion',
        'puntaje'
    ];
}
