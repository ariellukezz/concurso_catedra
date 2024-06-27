<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstudioPosgrado extends Model
{
    use HasFactory;

    protected $table = 'estudiosposgrado';

    protected $fillable = [
        'denominacion',
        'institucion',
        'fec_inicio',
        'fec_fin',
        'estado',
        'id_usuario',
        'id_tipo',
        'semestres',
        'url'
    ];

}
