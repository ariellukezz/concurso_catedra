<!DOCTYPE html>
<html>
<head>
    <title>Test condensado</title>
</head>
<body style="font-family: Helvetica, sans-serif"> 
    <table>
        <tr>
            <td>
                <div style="height: 90px; width:90px; background:yellow;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdPSmmKm0bH3mabimaLCdzQ388vVui1iVdUw&s" width="100%" alt="">
                </div>
            </td>
            <td>
                <div style="margin-top: -20px; margin-left:10px;">
                    <div><span style="color: blue; font-size:36pt; font-family:'helvetica'">Ariel Luque</span></div>
                    <div style="margin-top: -5px;"><span style="font-size:11pt; font-family:'helvetica'">Celular: </span><span style="font-family:'helvetica'"> 966637192</span></div>
                    <div style="margin-top: -0px;"><span style="font-size:11pt; font-family:'helvetica'">Correo: </span><span style="font-family:'helvetica'"> jhonar_theking@gmail.com</span></div>
                </div>
            </td>
        </tr>
    </table>
    <div style="width: 100%; border-bottom:1px solid blue;">
    </div>

    <div style="width: 100%; border-bottom:1px solid blue; margin-top:10px;">
        <div style="padding-bottom: 5px;">
            <div style="font-size:14pt; font-weight:bold; color:blue;"> Descripción breve </div>
        </div>
    </div>

    <div>
        <p style="text-align: justify; line-height: 1.5rem;">
            {{ $desc->descripcion }}
        </p>
    </div>


    <div style="width: 100%; border-bottom:1px solid blue; margin-top:10px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:blue;"> Datos Personales </span>
        </div>
    </div>

    <div>
        <table>
            <tr>
                <td> <span style="font-weight: 700;"> Tipo doc: </span> </td>                                    
                <td> {{ $candidato->tipo_doc = 1?"DNI":"Carnet Ext" }} </td>
            </tr>
            <tr>
                <td> <span style="font-weight: 700;"> N° documento: </span></td>                                    
                <td> {{ $candidato->nro_doc }} </td>
            </tr>
            <tr>
                <td> <span style="font-weight: 700;"> Apellidos y nombres: </span></td>
                <td> <span style="text-transform:capitalize;"> {{ strtolower($candidato->paterno) }} {{ strtolower($candidato->materno) }} {{ strtolower($candidato->nombres) }}</span></td>
            </tr>
            <tr>
                <td> <span style="font-weight: 700;"> Procedencia: </span></td>
                <td> <span style="text-transform:capitalize;"> {{ strtolower($candidato->lugar) }}</span></td>
            </tr>
            <tr>
                <td> <span style="font-weight: 700;"> Dirección: </span></td>
                <td> <span style="text-transform:capitalize;"> {{ strtolower($candidato->direccion) }}</span></td>
            </tr>
            <tr>
                <td> <span style="font-weight: 700;"> Sexo: </span></td>
                <td> <span style="text-transform:capitalize;">{{ $candidato->sexo?"Masculino":"Femenino" }}</span></td>
            </tr>
        </table>
    </div>

    <div style="width: 100%; border-bottom:1px solid blue; margin-top:10px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:blue;"> Títulos y grados </span>
        </div>
    </div>

    @if (isset($titulos) && !empty($titulos))
    <div>
        @foreach ($titulos as $titulo)
        <div style="margin-bottom: 10px;">
            <div>{{ $titulo->tipo_nombre }}</div>
            <div>{{ $titulo->fec_expedicion }}</div>
            <div>{{ $titulo->denominacion }}</div>
            <div>{{ $titulo->institucion }}</div>
            <div>( {{ $titulo->reg_sunedu == 1? "Registrado en sunedu":"Sin registro"}} )</div>
        </div>
        @endforeach
    </div>
    @else
        <div>
            Titulos no registrados
        </div>        
    @endif


    <div style="width: 100%; border-bottom:1px solid blue; margin-top:10px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:blue;"> Estudios de posgrado y actualización</span>
        </div>
    </div>


    {{-- esp.id, esp.institucion, esp.semestres, esp.denominacion, esp.fec_inicio, esp.fec_fin, 
        esp.id_tipo, esp.url, tact.descripcion AS tipo_nombre --}}

    <div>
        @foreach ($estudios_posgrado as $estudios)
        <div style="margin-bottom: 10px;">
            <div>{{ $estudios->institucion }}</div>
            <div>{{ $estudios->semestres }}</div>
            <div>{{ $estudios->denominacion }}</div>
            <div>{{ $estudios->fec_inicio }} - {{ $estudios->fec_fin }}</div>
            <div>( {{ $estudios->tipo_nombre}} )</div>
        </div>
        @endforeach
    </div>


    <div style="width: 100%; border-bottom:1px solid blue; margin-top:10px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:blue;"> Investigaciones y publicaciones </span>
        </div>
    </div>

    {{-- pub.id, pub.id_tipo, pub.titulo, pub.url, pub.fec_publicacion,
    tipo.descripcion, tipo.participacion, tipo.puntaje --}}
    <div>
        @foreach ($investigaciones as $investigacion)
        <div style="margin-bottom: 10px;">
            <div>{{ $investigacion->id }}</div>
            <div>{{ $investigacion->titulo }}</div>
            <div>{{ $investigacion->fec_publicacion }}</div>
            <div>{{ $investigacion->descripcion }} </div>
            <div>( {{ $investigacion->participacion}} )</div>
        </div>
        @endforeach
    </div>

    <div style="width: 100%; border-bottom:1px solid blue; margin-top:10px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:blue;"> Experiencia no docente </span>
        </div>
    </div>

    <div style="width: 100%; border-bottom:1px solid blue; margin-top:10px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:blue;"> Experiencia no docente </span>
        </div>
    </div>

    <div style="width: 100%; border-bottom:1px solid blue; margin-top:10px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:blue;"> Experiencia docente </span>
        </div>
    </div>

    <div style="width: 100%; border-bottom:1px solid blue; margin-top:10px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:blue;"> Manejo de software especializado </span>
        </div>
    </div>

    <div style="width: 100%; border-bottom:1px solid blue; margin-top:10px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:blue;"> Idiomas </span>
        </div>
    </div>

    <div style="width: 100%; border-bottom:1px solid blue; margin-top:10px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:blue;"> Reconocimiento al mérito </span>
        </div>
    </div>

    <div style="width: 100%; border-bottom:1px solid blue; margin-top:10px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:blue;"> Act. de extensión cultural proyección y responsabilidad social en la especialidad </span>
        </div>
    </div>

    <div style="width: 100%; border-bottom:1px solid blue; margin-top:10px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:blue;"> Bonificación </span>
        </div>
    </div>

    <div style="width: 100%; border-bottom:1px solid blue; margin-top:10px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:blue;"> Bonificación </span>
        </div>
    </div>

  
    <table >
        <tr >
            <th style="font-weight: 900; font-size:.8rem;">ID</th>
            <th style="font-weight: 900; font-size:.8rem;">Nombre</th>
            <th style="font-weight: 900; font-size:.8rem;">Email</th>
        </tr>
        <tr>
            <td>0001</td>
            <td>Ariel Luque</td>
            <td>Ariel_vaca@gmail.com</td>
        </tr>
    </table>
  
</body>
</html>