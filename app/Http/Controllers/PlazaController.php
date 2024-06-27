<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PlazaController extends Controller
{
    public function getPlazas($escuela){

        $res = DB::select("SELECT id as value, contrato as label FROM plaza WHERE id_escuela = $escuela AND estado = 1");
    
        $this->response['estado'] = !empty($res);
        $this->response['datos'] = $res;
        return response()->json($this->response, 200);
    }
}
