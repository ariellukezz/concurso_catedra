<?php

namespace App\Http\Controllers;
use App\Models\Experiencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

class ExperienciaController extends Controller
{
    public function subirPublicacionNoDocente(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpg,png,pdf,doc,docx|max:2048',
        ]);

        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('experiencia', 'public');

            $experiencia = new Experiencia();
            $experiencia->cargo = $request->cargo;
            $experiencia->institucion = $request->institucion; 
            $experiencia->fec_inicio = $request->fec_inicio;
            $experiencia->fec_fin = $request->fec_fin;
            $experiencia->id_tipo = 2;
            $experiencia->und_medida = 3;
            $experiencia->duracion = $request->duracion;
            $experiencia->url = "storage/".$path;
            $experiencia->id_usuario = auth()->id();
            $experiencia->save();

            return response()->json(['success' => 'File uploaded successfully'], 200);
        }

        return response()->json(['error' => 'File upload failed'], 400);
    }


    public function subirPublicacionDocente(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpg,png,pdf,doc,docx|max:2048',
        ]);

        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('experienciaDocente', 'public');

            $experiencia = new Experiencia();
            $experiencia->cargo = $request->cargo;
            $experiencia->institucion = $request->institucion; 
            $experiencia->fec_inicio = $request->fec_inicio;
            $experiencia->fec_fin = $request->fec_fin;
            $experiencia->id_tipo = 1;
            $experiencia->url = "storage/".$path;
            $experiencia->id_usuario = auth()->id();
            $experiencia->save();

            return response()->json(['success' => 'File uploaded successfully'], 200);
        }

        return response()->json(['error' => 'File upload failed'], 400);
    }


    public function getExperienciaNodocente(){
        $res = DB::select("SELECT 
            ex.id, ex.cargo, ex.institucion, ex.fec_inicio, ex.fec_fin, ex.duracion,
            ex.url, tipo.descripcion 
        FROM experiencia ex
        JOIN tipo_experiencia tipo ON ex.id_tipo = tipo.id
        wHERE ex.estado = 1 AND ex.id_tipo = 2 
        AND ex.id_usuario = ".auth()->id());
    
        $this->response['estado'] = !empty($res);
        $this->response['datos'] = $res;
        return response()->json($this->response, 200);
    }


    public function getExperienciaDocente(){
        $res = DB::select("SELECT 
            ex.id, ex.cargo, ex.institucion, ex.fec_inicio, ex.fec_fin, ex.duracion,
            ex.url, tipo.descripcion 
        FROM experiencia ex
        JOIN tipo_experiencia tipo ON ex.id_tipo = tipo.id
        wHERE ex.estado = 1 AND ex.id_tipo = 1
        AND ex.id_usuario = ".auth()->id());
    
        $this->response['estado'] = !empty($res);
        $this->response['datos'] = $res;
        return response()->json($this->response, 200);
    }

    
    public function eliminar($id) {

        $file = Experiencia::find($id);

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
