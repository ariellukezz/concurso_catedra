<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titulo extends Model
{
    use HasFactory;

    protected $table = 'titulos';

    protected $fillable = [
        'denominacion',
        'id_tipo',
        'id_usuario',
        'url',
        'estado',
        'reg_sunedu',
        'fec_expedicion',
        'institucion'
    ];
}

