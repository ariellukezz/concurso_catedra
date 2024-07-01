<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Candidato;
use PDF;
use DB;

class PDFController extends Controller
{
    public function generatePDF()
    {

        $descripcion = DB::select("SELECT d.id, d.descripcion FROM descripcion d where d.id_usuario = ".auth()->id());
        $desc = $descripcion[0];

        $cand = DB::select(
            "SELECT can.id, can.tipo_doc, can.nro_doc, can.nombres, can.paterno, can.materno, 
                can.sexo, CONCAT(can.fec_nac) AS fec_nac, ubigeo_residencia, celular, 
                CONCAT(ubi.departamento,' / ',ubi.provincia,' / ', ubi.distrito ) AS lugar,email AS correo, direccion, 
                estado
            FROM candidatos can
            JOIN ubigeo ubi ON ubi.reniec = can.ubigeo_residencia 
            WHERE usuario_id = ".auth()->id()); 
        $candidato = $cand[0];


        $titulos = DB::select("SELECT titulos.id, titulos.institucion, titulos.fec_expedicion, titulos.reg_sunedu, titulos.denominacion, titulos.id_tipo, titulos.url, tipo_titulo.nombre AS tipo_nombre
        FROM titulos
        JOIN tipo_titulo ON titulos.id_tipo = tipo_titulo.id
        WHERE titulos.id_usuario = ".auth()->id());

        $estudios_posgrado = DB::select("SELECT esp.id, esp.institucion, esp.semestres, esp.denominacion, esp.fec_inicio, esp.fec_fin, 
        esp.id_tipo, esp.url, tact.descripcion AS tipo_nombre
        FROM estudiosposgrado esp
        JOIN tipos_estudio_actualizacion tact ON esp.id_tipo = tact.id
        WHERE esp.id_usuario = ".auth()->id());

        $investigaciones = DB::select("SELECT pub.id, pub.id_tipo, pub.titulo, pub.url, pub.fec_publicacion,
        tipo.descripcion, tipo.participacion, tipo.puntaje
        FROM investigacionespublicaciones pub
        JOIN tipo_investigacion_publicacion tipo ON pub.id_tipo = tipo.id
        wHERE pub.estado = 1 AND pub.id_usuario = ".auth()->id());

        $data = [];
        $data['desc'] = $desc;
        $data['candidato'] = $candidato;
        $data['estudios_posgrado'] = $estudios_posgrado;
        $data['investigaciones'] = $investigaciones;


        $pdf = PDF::loadView('pdf.test.test', $data);
    
        return $pdf->stream('test.pdf');
    }
}
