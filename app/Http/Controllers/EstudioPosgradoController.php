<?php

namespace App\Http\Controllers;
use App\Models\EstudioPosgrado;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use DB;

class EstudioPosgradoController extends Controller
{
    public function subirEstudios(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpg,png,pdf,doc,docx|max:2048',
            'denominacion' => 'required|string|max:255',
            'tipo' => 'required|integer',
        ]);

        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('estudios', 'public');

            $titulo = new EstudioPosgrado();
            $titulo->denominacion = $request->denominacion;
            $titulo->id_tipo = $request->tipo;
            $titulo->url = "storage/".$path;
            $titulo->id_usuario = auth()->id();
            $titulo->save();

            return response()->json(['success' => 'File uploaded successfully'], 200);
        }

        return response()->json(['error' => 'File upload failed'], 400);
    }


    public function getEstudios(){
        $res = DB::select("SELECT esp.id, esp.denominacion, esp.id_tipo, esp.url, tact.descripcion AS tipo_nombre
            FROM estudiosposgrado esp
            JOIN tipos_estudio_actualizacion tact ON esp.id_tipo = tact.id
            WHERE esp.id_usuario = ".auth()->id());
    
        $this->response['estado'] = !empty($res);
        $this->response['datos'] = $res;
        return response()->json($this->response, 200);
    }
    

    public function eliminarEstudio($id) {

        $file = EstudioPosgrado::find($id);

        if (!$file) {
            return response()->json(['error' => 'File not found'], 404);
        }
        if (Storage::disk('public')->exists($file->url)) {
            Storage::disk('public')->delete($file->url);
        }
        $file->delete();

        $this->response['estado'] = true;
        return response()->json($this->response, 200);
        // return response()->json(['success' => 'File deleted successfully'], 200);
    }


}
