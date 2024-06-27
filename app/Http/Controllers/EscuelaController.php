<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class EscuelaController extends Controller
{

    public function getEscuelas(){

        $res = DB::select("SELECT id AS VALUE, nombre AS label FROM escuela WHERE estado = 1");
    
        $this->response['estado'] = !empty($res);
        $this->response['datos'] = $res;
        return response()->json($this->response, 200);
    }

}
