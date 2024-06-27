<?php

namespace App\Http\Controllers;
use App\Models\Inscripcion;
use Illuminate\Http\Request;
use DB;

class InscripcionController extends Controller
{
    public function save(Request $request)
    {
        $request->validate([
            'programa' => 'required',
            'plazas' => 'required',
        ]);

        $plazas = explode(',', $request->plazas);

        $experiencia = new Inscripcion();

        $experiencia->plaza1 = $plazas[0] ?? null; 
        $experiencia->plaza2 = $plazas[1] ?? null; 
        $experiencia->id_escuela = $request->programa;
        $experiencia->id_proceso = 1;
        $experiencia->id_usuario = auth()->id();

        $experiencia->save();
        return response()->json(['message' => 'Inscripción guardada exitosamente'], 200);
    }

    public function getInscripciones()
    {
        $inscripciones = DB::select("
            SELECT ins.id, pla1.contrato as contrato1, pla2.contrato as contrato2, ins.id_usuario, ins.id_proceso, ins.estado,
                esc.nombre AS escuela, esc.id AS id_escuela
            FROM (SELECT id, plaza1, plaza2, id_usuario, id_proceso, estado, id_escuela
                FROM inscripcion
                WHERE id_usuario =".auth()->id() ." ) AS ins
            JOIN escuela esc ON ins.id_escuela = esc.id
            JOIN plaza pla1 ON ins.plaza1 = pla1.id
            left JOIN plaza pla2 ON ins.plaza2 = pla2.id
        ");
        $this->response['estado'] = !empty($inscripciones);
        $this->response['datos'] = $inscripciones;
        return response()->json($this->response, 200);
    }

}
