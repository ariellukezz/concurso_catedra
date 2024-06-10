<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    use HasFactory;

    protected $table = 'candidatos';

    protected $fillable = [
        'tipo_doc',
        'nro_doc',
        'nombres',
        'paterno',
        'materno',
        'sexo',
        'fec_nac',
        'ubigeo_residencia',
        'discapacidad',
        'celular',
        'email',
        'direccion',
        'foto',
        'estado',
        'usuario_id'
    ];


}
