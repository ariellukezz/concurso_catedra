<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestigacionPublicacion extends Model
{
    use HasFactory;

    protected $table = 'investigacionespublicaciones';

    protected $fillable = [
        'id_tipo',
        'titulo',
        'fec_publicacion',
        'id_usuario',
        'estado',
        'url'

    ];

}
