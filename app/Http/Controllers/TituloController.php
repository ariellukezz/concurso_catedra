<?php

namespace App\Http\Controllers;
use App\Models\Titulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

class TituloController extends Controller
{
    public function cargarTitulo(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpg,png,pdf,doc,docx|max:2048',
            'descripcion' => 'required|string|max:255',
            'tipo' => 'required|integer',
        ]);

        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('titulos', 'public');

            $titulo = new Titulo();
            $titulo->denominacion = $request->descripcion;
            $titulo->institucion = $request->institucion;
            $titulo->fec_expedicion = $request->fec_expedicion;
            $titulo->reg_sunedu = $request->reg_sunedu;
            $titulo->id_tipo = $request->tipo;
            $titulo->url = "storage/".$path;
            $titulo->id_usuario = auth()->id();
            $titulo->save();

            return response()->json(['success' => 'File uploaded successfully'], 200);
        }

        return response()->json(['error' => 'File upload failed'], 400);
    }


    public function getTitulosUsuario(){
        $res = DB::select("SELECT titulos.id, titulos.institucion, titulos.fec_expedicion, titulos.reg_sunedu, titulos.denominacion, titulos.id_tipo, titulos.url, tipo_titulo.nombre AS tipo_nombre
        FROM titulos
        JOIN tipo_titulo ON titulos.id_tipo = tipo_titulo.id
        WHERE titulos.id_usuario = ".auth()->id());
    
        $this->response['estado'] = !empty($res);
        $this->response['datos'] = $res;
        return response()->json($this->response, 200);
    }

    public function eliminarTitulo($id) {

        $file = Titulo::find($id);

        if (!$file) {
            return response()->json(['error' => 'File not found'], 404);
        }
        if (Storage::disk('public')->exists($file->url)) {
            Storage::disk('public')->delete($file->url);
        }
        $file->delete();

        $this->response['estado'] = true;
        return response()->json($this->response, 200);
    }
    
 
}
