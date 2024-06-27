<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Reconocimiento;
use Illuminate\Support\Facades\Storage;
use DB;

class ReconocimientoController extends Controller
{
    public function save(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpg,png,pdf,doc,docx|max:2048'
        ]);

        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('softwareEspecializado', 'public');

            $titulo = new Reconocimiento();
            $titulo->descripcion = $request->descripcion;

            $titulo->id_tipo = $request->tipo;
            $titulo->url = "storage/".$path;
            $titulo->id_usuario = auth()->id();
            $titulo->save();

            return response()->json(['success' => 'File uploaded successfully'], 200);
        }

        return response()->json(['error' => 'File upload failed'], 400);

    }




    public function getReconocimientos(){
        $res = DB::select("SELECT rec.id, rec.descripcion, rec.url, tip.tipo FROM reconocimientos rec
            JOIN tipo_reconocimiento tip ON rec.id_tipo = tip.id
            = ".auth()->id());
    
        $this->response['estado'] = !empty($res);
        $this->response['datos'] = $res;
        return response()->json($this->response, 200);
    }

    public function eliminar($id) {

        $file = Reconocimiento::find($id);

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
