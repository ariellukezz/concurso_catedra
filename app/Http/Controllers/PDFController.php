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
        $data = [];

        // $descripcion = DB::select("SELECT d.id, d.descripcion FROM descripcion d where d.id_usuario = ".auth()->id());
        //$desc = $descripcion[0];

        $cand = DB::select(
            "SELECT can.id, can.tipo_doc, can.nro_doc, can.nombres, can.paterno, can.materno, 
                can.sexo, CONCAT(can.fec_nac) AS fec_nac, ubigeo_residencia, celular, 
                CONCAT(ubi.departamento,' / ',ubi.provincia,' / ', ubi.distrito ) AS lugar, usu.email AS correo, direccion, 
                can.estado
            FROM candidatos can
            JOIN users usu ON usu.id = can.usuario_id 
            JOIN ubigeo ubi ON ubi.reniec = can.ubigeo_residencia 
            WHERE can.usuario_id = ".auth()->id()); 
        $candidato = $cand[0];

        $titulos = DB::select("SELECT titulos.id, titulos.institucion, titulos.fec_expedicion, titulos.reg_sunedu, titulos.denominacion, titulos.id_tipo, titulos.url, tipo_titulo.nombre AS tipo_nombre, 
        tipo_titulo.nombre_corto
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

        $experiencia_no_docente = DB::select("SELECT 
            ex.id, ex.cargo, ex.institucion, ex.duracion, tipo.descripcion 
        FROM experiencia ex
        JOIN tipo_experiencia tipo ON ex.id_tipo = tipo.id
        wHERE ex.estado = 1 AND ex.id_tipo = 2 
        AND ex.id_usuario = ".auth()->id());

        $experiencia_docente = DB::select("SELECT 
        ex.id, ex.cargo, ex.institucion, ex.duracion, tipo.descripcion 
        FROM experiencia ex
        JOIN tipo_experiencia tipo ON ex.id_tipo = tipo.id
        wHERE ex.estado = 1 AND ex.id_tipo = 1 
        AND ex.id_usuario = ".auth()->id());

        $experiencia_software = DB::select("SELECT sof.id, sof.descripcion, sof.institucion, sof.url, cat.id AS id_categoria,
        cat.descripcion as categoria, cat.puntaje 
        FROM software_especializado sof
        JOIN categoria_software cat ON sof.id_categoria = cat.id
        WHERE sof.id_usuario  = ".auth()->id());

        $idiomas = DB::select("SELECT idi.id, idi.idioma, niv.nivel, niv.puntaje, idi.url from idiomas idi
        JOIN nivel_idiomas niv ON niv.id = idi.nivel 
        AND idi.id_usuario = ".auth()->id());

        $reconocimientos = DB::select("SELECT rec.id, rec.descripcion, rec.url, tip.tipo, tip.id as id_tipo FROM reconocimientos rec
        JOIN tipo_reconocimiento tip ON rec.id_tipo = tip.id
        = ".auth()->id());

        $actividades = DB::select("SELECT act.id, actividad, act.url, res.resolucion, res.id as id_tipo FROM actividades_extension act
        JOIN tipo_resolucion res ON act.tipo = res.id
        wHERE act.id_usuario = ".auth()->id());

        $bonificacion = DB::select("SELECT act.id, act.descripcion, act.url, res.descripcion AS tipo, res.id as id_tipo FROM bonificacion act
        JOIN tipo_bonificacion res ON act.tipo = res.id
        wHERE act.id_usuario = ".auth()->id());


        $grados = [];
        foreach ($titulos as $titulo) {
            $id_tipo = $titulo->id_tipo;
            $tipo_nombre = $titulo->nombre_corto;
            if (!isset($grados[$tipo_nombre])) {
                $grados[$tipo_nombre] = [];
            }
            $grados[$tipo_nombre][] = $titulo;  
        }

        $posgrado = [];
        foreach ($estudios_posgrado as $titulo) {
            $id_tipo = $titulo->id_tipo;
            $tipo_nombre = $titulo->id_tipo;
            if (!isset($posgrado[$tipo_nombre])) {
                $posgrado[$tipo_nombre] = [];
            }
            $posgrado[$tipo_nombre][] = $titulo;  
        }

        $_investigaciones = [];
        foreach ($investigaciones as $titulo) {
            $id_tipo = $titulo->id_tipo;
            $tipo_nombre = $titulo->id_tipo;
            if (!isset($_investigaciones[$tipo_nombre])) {
                $_investigaciones[$tipo_nombre] = [];
            }
            $_investigaciones[$tipo_nombre][] = $titulo;  
        }

        $_experiencia_software = [];
        foreach ($experiencia_software as $titulo) {
            $id_tipo = $titulo->id_categoria;
            $tipo_nombre = $titulo->id_categoria;
            if (!isset($_experiencia_software[$tipo_nombre])) {
                $_experiencia_software[$tipo_nombre] = [];
            }
            $_experiencia_software[$tipo_nombre][] = $titulo;  
        }

        $_reconocimientos = [];
        foreach ($reconocimientos as $titulo) {
            $id_tipo = $titulo->id_tipo;
            $tipo_nombre = $titulo->id_tipo;
            if (!isset($_reconocimientos[$tipo_nombre])) {
                $_reconocimientos[$tipo_nombre] = [];
            }
            $_reconocimientos[$tipo_nombre][] = $titulo;  
        }

        $_actividades = [];
        foreach ($actividades as $titulo) {
            $id_tipo = $titulo->id_tipo;
            $tipo_nombre = $titulo->id_tipo;
            if (!isset($_actividades[$tipo_nombre])) {
                $_actividades[$tipo_nombre] = [];
            }
            $_actividades[$tipo_nombre][] = $titulo;  
        }

        $_bonificacion = [];
        foreach ($bonificacion as $titulo) {
            $id_tipo = $titulo->id_tipo;
            $tipo_nombre = $titulo->id_tipo;
            if (!isset($_bonificacion[$tipo_nombre])) {
                $_bonificacion[$tipo_nombre] = [];
            }
            $_bonificacion[$tipo_nombre][] = $titulo;  
        }


        if(isset($grados['titulo'])){ $data['titulos'] = $grados['titulo']; }
        if(isset($grados['maestria'])){ $data['maestria'] = $grados['maestria']; }
        if(isset($grados['segundas'])){ $data['segundas'] = $grados['segundas']; }
        if(isset($grados['doctorado'])){ $data['doctorado'] = $grados['doctorado']; }

        if(isset($posgrado['1'])){ $data['posdoctorado'] = $posgrado['1']; }
        if(isset($posgrado['2'])){ $data['estudios_doctorado'] = $posgrado['2']; }
        if(isset($posgrado['3'])){ $data['diploma_presencial'] = $posgrado['3']; }
        if(isset($posgrado['4'])){ $data['diploma_virtual'] = $posgrado['4']; }
        if(isset($posgrado['5'])){ $data['congreso_internacional_organizador_asistente'] = $posgrado['5']; }
        if(isset($posgrado['6'])){ $data['congreso_internacional_ponente'] = $posgrado['6']; }
        if(isset($posgrado['7'])){ $data['congreso_nacional_ponente'] = $posgrado['7']; }
        if(isset($posgrado['8'])){ $data['congreso_nacional_organizador_asistente'] = $posgrado['8']; }
        if(isset($posgrado['9'])){ $data['cursos_seminarios'] = $posgrado['9']; }

        if(isset($_investigaciones['1'])){ $data['scopus'] = $_investigaciones['1']; }
        if(isset($_investigaciones['2'])){ $data['web_of_science'] = $_investigaciones['2']; }
        if(isset($_investigaciones['3'])){ $data['wiley'] = $_investigaciones['3']; }
        if(isset($_investigaciones['4'])){ $data['pubmed'] = $_investigaciones['4']; }
        if(isset($_investigaciones['5'])){ $data['mathematical_reviews'] = $_investigaciones['5']; }
        if(isset($_investigaciones['6'])){ $data['medline'] = $_investigaciones['6']; }
        if(isset($_investigaciones['7'])){ $data['spie'] = $_investigaciones['7']; }
        if(isset($_investigaciones['8'])){ $data['mcgraw'] = $_investigaciones['8']; }
        if(isset($_investigaciones['9'])){ $data['springer'] = $_investigaciones['9']; }        
        if(isset($_investigaciones['10'])){ $data['taylor'] = $_investigaciones['10']; }
        if(isset($_investigaciones['11'])){ $data['econlit'] = $_investigaciones['11']; }
        if(isset($_investigaciones['12'])){ $data['proquest'] = $_investigaciones['12']; }
        if(isset($_investigaciones['13'])){ $data['bentham'] = $_investigaciones['13']; }
        if(isset($_investigaciones['14'])){ $data['scielo'] = $_investigaciones['14']; }
        if(isset($_investigaciones['15'])){ $data['doaj'] = $_investigaciones['15']; }
        if(isset($_investigaciones['16'])){ $data['redalyc'] = $_investigaciones['16']; }
        if(isset($_investigaciones['17'])){ $data['latindex'] = $_investigaciones['17']; }
        if(isset($_investigaciones['18'])){ $data['registro_nacional_ciencia'] = $_investigaciones['18']; }
        if(isset($_investigaciones['19'])){ $data['reglamento_renacyt'] = $_investigaciones['19']; }
        if(isset($_investigaciones['20'])){ $data['reglamento_calificacion'] = $_investigaciones['20']; }
        if(isset($_investigaciones['21'])){ $data['capitulo_renacyt'] = $_investigaciones['21']; }
        if(isset($_investigaciones['20'])){ $data['jurado_pregrado'] = $_investigaciones['20']; }
        if(isset($_investigaciones['20'])){ $data['asesor_posgrado'] = $_investigaciones['20']; }
        if(isset($_investigaciones['20'])){ $data['jurado_posgrado'] = $_investigaciones['20']; }


        if(isset($_experiencia_software['1'])){ $data['software_mayor_40'] = $_experiencia_software['1']; }
        if(isset($_experiencia_software['2'])){ $data['software_menor_40'] = $_experiencia_software['2']; }

        if(isset($idiomas)){ $data['idiomas'] = $idiomas; }

        if(isset($_reconocimientos['1'])){ $data['quinto'] = $_reconocimientos['1']; }
        if(isset($_reconocimientos['2'])){ $data['tercio'] = $_reconocimientos['2']; }
        if(isset($_reconocimientos['3'])){ $data['ayudante_catedra'] = $_reconocimientos['3']; }

        if(isset($_actividades['1'])){ $data['rectoral'] = $_actividades['1']; }
        if(isset($_actividades['2'])){ $data['directoral'] = $_actividades['2']; }
        if(isset($_actividades['3'])){ $data['decanal'] = $_actividades['3']; }

        if(isset($_bonificacion['1'])){ $data['profesional_renacyt'] = $_bonificacion['1']; }
        if(isset($_bonificacion['2'])){ $data['egresado_unap'] = $_bonificacion['2']; }
        
        //return $data;
        //$data['desc'] = $desc;
        $data['candidato'] = $candidato;
        $data['inscripciones'] = $inscripciones;
 

        $pdf = PDF::loadView('pdf.test.test', $data);
    
        return $pdf->stream('test.pdf');
    }

    public function downloadAnexos($cod){

        $path = storage_path('app/public/anexos/'.$cod.".pdf");

        if (!file_exists($path)) {
            abort(404, 'El archivo no existe.');
        }

        return response()->download($path);
    }
    
}
