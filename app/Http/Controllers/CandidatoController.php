<?php

namespace App\Http\Controllers;
use App\Models\Candidato;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;


class CandidatoController extends Controller
{
    public function save(Request $request)
    {
        $candidato = null;
        if (!$request->id) {
            $request->validate([
                'tipo_doc' => 'required|integer',
                'nro_doc' => 'required|string|max:20',
                'paterno' => 'required|string|max:50',
                'materno' => 'required|string|max:50',
                'nombres' => 'required|string|max:100',
                'sexo' => 'required|integer',
                'fec_nac' => 'required|date',
                'celular' => 'required|string|max:20',
                'correo' => 'required|string|email|max:100',
                'ubigeo_residencia' => 'required|string|max:10',
                'terminos' => 'required|boolean',
                'direccion' => 'required|string|max:255',
            ]);
    
            $res = Candidato::create([
                'tipo_doc' => $request->tipo_doc,
                'nro_doc' => $request->nro_doc,
                'nombres'=> $request->nombres,
                'paterno' => $request->paterno, 
                'materno'=> $request->materno,
                'sexo' => $request->sexo,
                'fec_nac' => substr($request->fec_nac, 0,10),
                'ubigeo_residencia' => $request->ubigeo_residencia,
                'celular' => $request->celular,
                'email' => $request->correo,
                'direccion' =>  $request->direccion,
                'foto' => "",
                'estado' => 1,
                'usuario_id' => auth()->id()
            ]);

            $this->response['titulo'] = 'REGISTRO NUEVO';
            $this->response['mensaje'] = 'Registrado con exito';
            $this->response['estado'] = true;
            $this->response['datos'] = $res;
        } else {
    
            $candidato = Candidato::find($request->id);
    
            $request->validate([
                'tipo_doc' => 'required|integer',
                'nro_doc' => 'required|string|max:20',
                'paterno' => 'required|string|max:50',
                'materno' => 'required|string|max:50',
                'nombres' => 'required|string|max:100',
                'sexo' => 'required|integer',
                'fec_nac' => 'required|date',
                'celular' => 'required|string|max:20',
                'correo' => 'required|string|email|max:100',
                'ubigeo_residencia' => 'required|string|max:10',
                'terminos' => 'required|boolean',
                'direccion' => 'required|string|max:255',
            ]);

            $candidato->tipo_doc = $request->tipo_doc;
            $candidato->nro_doc = $request->nro_doc;
            $candidato->nombres = $request->nombres;
            $candidato->paterno = $request->paterno;
            $candidato->materno = $request->materno;
            $candidato->sexo = $request->sexo;
            $candidato->fec_nac = substr($request->fec_nac, 0,10);
            $candidato->ubigeo_residencia =  $request->ubigeo_residencia;
            $candidato->celular = $request->celular;
            $candidato->email = $request->correo;
            $candidato->direccion = $request->direccion;
            $candidato->foto = "";
            $candidato->estado = 1;
            $candidato->save();

            $this->response['titulo'] = '!REGISTRO MODIFICADO!';
            $this->response['mensaje'] = 'Registro actualizado con exito';
            $this->response['estado'] = true;
            $this->response['datos'] = $candidato;
        }

        return response()->json($this->response, 200);

    }

    public function getCandidato(){
        $res = Candidato::select('id','tipo_doc', 'nro_doc', 'nombres', 'paterno', 'materno', 'sexo', 
        DB::raw("CONCAT(fec_nac,'T05:00:00.000Z') AS fec_nac"),
        'ubigeo_residencia', 'celular', 'email as correo', 'direccion', 'estado', 'usuario_id AS usuario')
            ->where('usuario_id','=',auth()->id())
            ->first();
        if($res){
            $this->response['estado'] = true;
            $this->response['datos'] = $res;
        }else{
            $this->response['estado'] = false;
            $this->response['datos'] = $res;
        }


        return response()->json($this->response, 200);
    }








}
