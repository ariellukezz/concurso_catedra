<?php

namespace App\Http\Controllers;
use App\Models\EstudioPosgrado;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use DB;

class EstudioPosgradoController extends Controller
{
    public function subirEstudios(Request $request) {

        if (!$request->id) {

            $request->validate([
                'file' => 'required|file|mimes:jpg,png,pdf,doc,docx|max:2048',
                'denominacion' => 'required|string|max:255',
                'tipo' => 'required|integer',
            ]);

            if ($request->hasFile('file')) {
                $path = $request->file('file')->store('estudios', 'public');

                $titulo = new EstudioPosgrado();
                $titulo->denominacion = $request->denominacion;
                $titulo->institucion = $request->institucion;
                $titulo->semestres = $request->semestres;
                $titulo->fec_inicio = $request->fec_inicio;
                $titulo->fec_fin = $request->fec_fin;
                $titulo->id_tipo = $request->tipo;
                $titulo->url = "storage/".$path;
                $titulo->id_usuario = auth()->id();
                $titulo->save();

                return response()->json(['success' => 'Registrado con exito'], 200);
        
            }

        } else {

            $estudios = EstudioPosgrado::find($request->id);
            $file = EstudioPosgrado::find($request->id);
            $path = $estudios->url;
            $estudios->denominacion = $request->denominacion;
            $estudios->institucion = $request->institucion;
            $estudios->semestres = $request->semestres;
            $estudios->fec_inicio = $request->fec_inicio;
            $estudios->fec_fin = $request->fec_fin;
            $estudios->id_tipo = $request->tipo;
            if ($request->hasFile('file')) {
                if (Storage::disk('public')->exists($file->url)) {
                    Storage::disk('public')->delete($file->url);
                }
                $path = $request->file('file')->store('titulos', 'public');
            }
            $estudios->url = "storage/".$path;
            $estudios->id_usuario = auth()->id();
            $estudios->save();

            return response()->json(['error' => 'Registro actlualizado'], 200);
        }


    }

    public function getEstudios(){
        $res = DB::select("SELECT esp.id, esp.institucion, esp.semestres, esp.denominacion, 
            esp.id_tipo, esp.url, tact.descripcion AS tipo_nombre
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
