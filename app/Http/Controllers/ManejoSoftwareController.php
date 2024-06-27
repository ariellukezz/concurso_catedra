<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ManejoSoftware;
use Illuminate\Support\Facades\Storage;
use DB;

class ManejoSoftwareController extends Controller
{
    public function save(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpg,png,pdf,doc,docx|max:2048'
        ]);

        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('softwareEspecializado', 'public');

            $titulo = new ManejoSoftware();
            $titulo->descripcion = $request->descripcion;
            $titulo->institucion = $request->institucion;
            $titulo->id_categoria = $request->id_categoria;
            $titulo->url = "storage/".$path;
            $titulo->id_usuario = auth()->id();
            $titulo->save();

            return response()->json(['success' => 'File uploaded successfully'], 200);
        }

        return response()->json(['error' => 'File upload failed'], 400);
    }


    public function getManejoSoftware(){
        $res = DB::select("SELECT sof.id, sof.descripcion, sof.institucion, sof.url, cat.id AS id_categoria,
            cat.descripcion as categoria, cat.puntaje 
        FROM software_especializado sof
        JOIN categoria_software cat ON sof.id_categoria = cat.id
        WHERE sof.id_usuario  = ".auth()->id());
    
        $this->response['estado'] = !empty($res);
        $this->response['datos'] = $res;
        return response()->json($this->response, 200);
    }

    public function eliminar($id) {

        $file = ManejoSoftware::find($id);

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
