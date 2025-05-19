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
            'plaza' => 'required',
        ]);

        $experiencia = new Inscripcion();
        $experiencia->plaza1 = $request->plaza; 
        $experiencia->plaza2 = $request->plaza_adicional ?? null; 
        $experiencia->id_escuela = $request->programa;
        $experiencia->id_proceso = 1;
        $experiencia->id_usuario = auth()->id();

        $experiencia->save();
        return response()->json(['message' => 'Inscripción guardada exitosamente'], 200);
    }

    public function getInscripciones()
    {
        $inscripciones = DB::select("SELECT 
                ins.id, 
                pla1.id AS id_p1, 
                pla1.PD AS PD_p1,
                pla1.contrato AS contrato_p1,
                pla1.id_escuela AS id_escuela_p1,
                pla1.tipo AS tipo_p1,
                pla1.cursos AS cursos_p1,
                pla2.id AS id_p2, 
                pla2.PD AS PD_p2,
                pla2.contrato AS contrato_p2,
                pla2.id_escuela AS id_escuela_p2,
                pla2.tipo AS tipo_p2, 
                pla2.cursos AS cursos_p2,
                ins.id_usuario, 
                ins.id_proceso, 
                ins.estado,
                esc.nombre AS escuela, 
                esc.id AS id_escuela
            FROM (SELECT id, plaza1, plaza2, id_usuario, id_proceso, estado, id_escuela
                FROM inscripcion
                WHERE id_usuario = ".auth()->id().") AS ins
            JOIN escuela esc ON ins.id_escuela = esc.id
            JOIN plaza pla1 ON ins.plaza1 = pla1.id
            LEFT JOIN plaza pla2 ON ins.plaza2 = pla2.id
        ");

        $p1Array = [];
        $p2Array = [];

        foreach ($inscripciones as $inscripcion) {
            $p1Array[] = [
                'id' => $inscripcion->id_p1,
                'pd' => $inscripcion->PD_p1,
                'tipo_contrato' => $inscripcion->contrato_p1,
                'cursos' => $inscripcion->cursos_p1,
                'id_escuela' => $inscripcion->id_escuela_p1,
                'tipo_plaza' => $inscripcion->tipo_p1,
            ];

            $p2Array[] = [
                'id' => $inscripcion->id_p2,
                'pd' => $inscripcion->PD_p2,
                'tipo_contrato' => $inscripcion->contrato_p2,
                'cursos' => $inscripcion->cursos_p2,
                'id_escuela' => $inscripcion->id_escuela_p2,
                'tipo_plaza' => $inscripcion->tipo_p2,
            ];
        }

        $response = [
            'estado' => !empty($inscripciones),
            'P1' => $p1Array,
            'P2' => $p2Array,
            'datos' => $inscripciones,
        ];
        $this->response['estado'] = !empty($inscripciones);
        $this->response['datos'] = $response;
        return response()->json($this->response, 200);
    }

}
