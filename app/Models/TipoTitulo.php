<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoTitulo extends Model
{
    use HasFactory;

    protected $table = 'tipo_titulo';

    protected $fillable = [
        'nombre',
        'estado'
    ];
}
