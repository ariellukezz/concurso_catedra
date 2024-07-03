<?php

namespace App\Http\Controllers;
use App\Models\Descripcion;
use Illuminate\Http\Request;
use DB;

class DescripcionController extends Controller
{
    public function save(Request $request)
    {
        $request->validate([
            'descripcion' => 'required',
        ]);

        if (!$request->id) {
            $descripcion = new Descripcion();
            $descripcion->descripcion = $request->descripcion;
            $descripcion->id_usuario = auth()->id();
            $descripcion->save();
        }else {
            $descripcion = Descripcion::find($request->id);
            $descripcion->descripcion = $request->descripcion;
            $descripcion->id_usuario = auth()->id();
            $descripcion->save();
            
        }

        return response()->json(['mensaje' => 'Guardado con exito'], 200);
    }

    public function getDescripcion(){
        $res = DB::select("SELECT 
            d.id, d.descripcion
        FROM descripcion d
        where d.id_usuario = ".auth()->id());

        if(count($res) > 0 ){
            $this->response['estado'] = true;
            $this->response['datos'] = $res[0];            
        }else{
            $this->response['estado'] = false;
        }
    
        return response()->json($this->response, 200);
    }

    public function eliminar($id) {

        $des = Descripcion::find($id);
        $des->delete();
        $this->response['estado'] = true;
        return response()->json($this->response, 200);
    }

}
