<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PlazaController extends Controller
{
    public function getPlazas($escuela){

        $res = DB::select("SELECT id, pd, contrato AS tipo_contrato, cursos, tipo as tipo_plaza FROM plaza WHERE id_escuela = 7 AND estado = 1");
    
        $this->response['estado'] = !empty($res);
        $this->response['datos'] = $res;
        return response()->json($this->response, 200);
    }
}
