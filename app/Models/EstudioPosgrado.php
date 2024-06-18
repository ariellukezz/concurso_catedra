<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstudioPosgrado extends Model
{
    use HasFactory;

    protected $table = 'estudiosposgrado';

    protected $fillable = [
        'id_usuario',
        'id_tipo',
        'denominacion',
        'fec_inicio',
        'fec_fin',
        'estado',
        'url'
    ];


}
