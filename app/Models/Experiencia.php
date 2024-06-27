<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experiencia extends Model
{
    use HasFactory;

    protected $table = 'experiencia';

    protected $fillable = [
        'id_tipo',
        'titulo',
        'fec_publicacion',
        'id_usuario',
        'estado',
        'url',
        'duracion',
        'und_medida'
    ];

}
