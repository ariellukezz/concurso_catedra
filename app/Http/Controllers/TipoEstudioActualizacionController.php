<?php

namespace App\Http\Controllers;
use App\Models\TipoEstudioActualizacion;
use Illuminate\Http\Request;

class TipoEstudioActualizacionController extends Controller
{
    
    public function selectTipoEstudioActualizacion()
    {
        $res = TipoEstudioActualizacion::select('id as value', 'descripcion as label')
            ->where('estado', 1)
            ->get();
    
        $this->response['estado'] = $res->isNotEmpty();
        $this->response['datos'] = $res;
        return response()->json($this->response, 200);
    }


}
