<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActividadSocial extends Model
{
    use HasFactory;

    protected $table = 'actividades_extension';

    protected $fillable = [
        'tipo',
        'actividad',
        'url',
        'id_usuario'
    ];

}
