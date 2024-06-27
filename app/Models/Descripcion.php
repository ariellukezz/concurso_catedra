<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Descripcion extends Model
{
    use HasFactory;

    protected $table = 'descripcion';

    protected $fillable = [
        'descripcion',
        'id_usuario'
    ];


}
