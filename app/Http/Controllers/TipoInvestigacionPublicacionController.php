<?php

namespace App\Http\Controllers;
use App\Models\TipoInvestigacionPublicacion;
use Illuminate\Http\Request;

class TipoInvestigacionPublicacionController extends Controller
{

    public function selectTipoInvestigacionPublicacion()
    {
        $res = TipoInvestigacionPublicacion::selectRaw('id AS value, CONCAT(participacion, " de ", descripcion) AS label')
        ->where('estado', 1)
        ->get();
    
        $this->response['estado'] = $res->isNotEmpty();
        $this->response['datos'] = $res;
        return response()->json($this->response, 200);
    }

}
 