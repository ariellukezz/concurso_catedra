<?php

namespace App\Http\Controllers;
use App\Models\Bonificacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

class BonificacionController extends Controller
{
    public function save(Request $request) {
        $request->validate([
            'file' => 'required|file|mimes:jpg,png,pdf,doc,docx|max:2048',
        ]);

        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('estudios', 'public');

            $bonificacion = new Bonificacion();
            $bonificacion->descripcion = $request->descripcion;
            $bonificacion->tipo = $request->tipo;
            $bonificacion->url = "storage/".$path;
            $bonificacion->id_usuario = auth()->id();
            $bonificacion->save();

            return response()->json(['success' => 'File uploaded successfully'], 200);
        }

        return response()->json(['error' => 'File upload failed'], 400);
    }

    public function getBonificaciones(){
        $res = DB::select("SELECT act.id, act.descripcion, act.url, res.descripcion AS tipo FROM bonificacion act
        JOIN tipo_bonificacion res ON act.tipo = res.id
        wHERE act.id_usuario = ".auth()->id());
    
        $this->response['estado'] = !empty($res);
        $this->response['datos'] = $res;
        return response()->json($this->response, 200);
    }

    public function eliminar($id) {

        $file = Bonificacion::find($id);

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
