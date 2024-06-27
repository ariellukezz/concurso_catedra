<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bonificacion extends Model
{
    use HasFactory;

    protected $table = 'bonificacion';

    protected $fillable = [
        'tipo',
        'descripcion',
        'id_usuario',
        'url'
    ];

}
