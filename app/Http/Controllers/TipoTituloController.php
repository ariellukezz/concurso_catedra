<?php

namespace App\Http\Controllers;
use App\Models\TipoTitulo;
use Illuminate\Http\Request;

class TipoTituloController extends Controller
{
    public function selectTipoTitulos()
    {
        $res = TipoTitulo::select('id as value', 'nombre as label')
            ->where('estado', 1)
            ->get();
    
        $this->response['estado'] = $res->isNotEmpty();
        $this->response['datos'] = $res;
        return response()->json($this->response, 200);
    }


}
