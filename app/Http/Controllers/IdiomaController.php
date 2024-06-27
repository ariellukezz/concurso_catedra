<?php

namespace App\Http\Controllers;
use App\Models\Idioma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
class IdiomaController extends Controller
{
    public function save(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpg,png,pdf,doc,docx|max:2048'
        ]);

        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('idiomas', 'public');

            $titulo = new Idioma();
            $titulo->idioma = $request->idioma;
            $titulo->nivel = $request->nivel;
            $titulo->url = "storage/".$path;
            $titulo->id_usuario = auth()->id();
            $titulo->save();

            return response()->json(['success' => 'File uploaded successfully'], 200);
        }

        return response()->json(['error' => 'File upload failed'], 400);
    }


    public function getIdiomas(){
        $res = DB::select("SELECT idi.id, idi.idioma, niv.nivel, niv.puntaje, idi.url from idiomas idi
        JOIN nivel_idiomas niv ON niv.id = idi.nivel 
        AND idi.id_usuario = ".auth()->id());
    
        $this->response['estado'] = !empty($res);
        $this->response['datos'] = $res;
        return response()->json($this->response, 200);
    }


    public function eliminar($id) {

        $file = Idioma::find($id);

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
