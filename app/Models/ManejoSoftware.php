<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManejoSoftware extends Model
{
    use HasFactory;
    
    protected $table = 'software_especializado';

    protected $fillable = [
        'id_tipo',
        'descripcion',
        'institucion',
        'id_categoria',
        'id_usuario',
        'url'
    ];
}
