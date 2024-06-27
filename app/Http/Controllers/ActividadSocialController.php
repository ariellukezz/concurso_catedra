<?php

namespace App\Http\Controllers;
use App\Models\ActividadSocial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

class ActividadSocialController extends Controller
{
    
    public function save(Request $request) {
        $request->validate([
            'file' => 'required|file|mimes:jpg,png,pdf,doc,docx|max:2048',
        ]);

        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('estudios', 'public');

            $titulo = new ActividadSocial();
            $titulo->actividad = $request->actividad;
            $titulo->tipo = $request->tipo;
            $titulo->url = "storage/".$path;
            $titulo->id_usuario = auth()->id();
            $titulo->save();

            return response()->json(['success' => 'File uploaded successfully'], 200);
        }

        return response()->json(['error' => 'File upload failed'], 400);
    } 

    public function getActividades(){
        $res = DB::select("SELECT act.id, actividad, act.url, res.resolucion FROM actividades_extension act
        JOIN tipo_resolucion res ON act.tipo = res.id
        wHERE act.id_usuario = ".auth()->id());
    
        $this->response['estado'] = !empty($res);
        $this->response['datos'] = $res;
        return response()->json($this->response, 200);
    }

    public function eliminar($id) {

        $file = ActividadSocial::find($id);

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
