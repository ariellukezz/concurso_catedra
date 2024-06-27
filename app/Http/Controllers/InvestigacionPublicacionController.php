<?php

namespace App\Http\Controllers;
use App\Models\InvestigacionPublicacion;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use DB;

class InvestigacionPublicacionController extends Controller
{
    public function subirPublicacion(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpg,png,pdf,doc,docx|max:2048',
            'tipo' => 'required|integer',
        ]);

        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('publicaciones', 'public');

            $titulo = new InvestigacionPublicacion();
            $titulo->titulo = $request->titulo;
            $titulo->fec_publicacion = Str::substr($request->fec_publicacion, 0, 10);
            $titulo->id_tipo = $request->tipo;
            $titulo->url = "storage/".$path;
            $titulo->id_usuario = auth()->id();
            $titulo->save();

            return response()->json(['success' => 'File uploaded successfully'], 200);
        }

        return response()->json(['error' => 'File upload failed'], 400);
    }


    public function getPublicaciones(){
        $res = DB::select("SELECT pub.id, pub.id_tipo, pub.titulo, pub.url, pub.fec_publicacion,
            tipo.descripcion, tipo.participacion, tipo.puntaje
        FROM investigacionespublicaciones pub
        JOIN tipo_investigacion_publicacion tipo ON pub.id_tipo = tipo.id
        wHERE pub.estado = 1 AND pub.id_usuario = ".auth()->id());
    
        $this->response['estado'] = !empty($res);
        $this->response['datos'] = $res;
        return response()->json($this->response, 200);
    }


    
    public function eliminarPublicacion($id) {

        $file = InvestigacionPublicacion::find($id);

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
