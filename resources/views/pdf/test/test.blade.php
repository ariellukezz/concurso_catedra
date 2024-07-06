<!DOCTYPE html>
<html>
<head>
    <title>CV</title>
    <style>
        @page{
            margin: 3.5cm 1cm 1.5cm 1cm;
            font-family: Helvetica, Arial, sans-serif;
        }
        #header{
            position: fixed;
            height: 100%;
            width: 100%;
            top: -3cm;
            left: 0cm;

        }
        #footer{
            text-align: center;
            width: 100%;
            position: fixed;
            left: 0cm;
            bottom: -2.5cm;
            background: red;
        }
        .table-container {
            page-break-inside: avoid;
            margin-bottom: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        tr{
            page-break-inside: avoid;
        }


        th, td {
            border-bottom: 0px solid #dddddd;
            text-align: left;
            padding:3px 5px;
        }

            /* Estilo alterno para filas para mejorar la legibilidad */
        tr:nth-child(even) {
            background-color: #f5f5f5D8;
            background: none;
        }

            /* Estilo al pasar el ratón sobre las filas */
        tr:hover {
            background-color: #f7f7f7;
            }
    </style>

</head>
<body style=" margin-top:-3px">

    <div id="header">
        <div style="width: 100%; text-align:center;">
            <table style="width: 100%">
                <tr style="">
                    <td align="right" style="border:none;" width="50">
                        <div style="margin-top: -5px;">
                            <img src="{{ public_path('imagenes/logotiny.png')}}"  width="65"/>
                        </div>
                    </td>
                    <td style="width: 550px; border:none;">
                        <div style="text-align: left; margin-left:-10px; margin-top: 10px; margin-bottom:4px; font-size:10pt; width:100%; text-align:center;">
                            {{-- <div style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-style:italic; ">UNIVERSIDAD NACIONAL DEL ALTIPLANO</div> --}}
                            <div style="font-size:2rem; font-family: Times, 'Times New Roman'; font-style:italic;">Universidad Nacional del Altiplano</div>
                            <div style="font-size:1rem; space-letter:.7rem; font-weight:bold; ">CONCURSO PÚBLICO DE CÁTEDRA 2024-II</div>
                            <div>CONCURSO PÚBLICO DE CÁTEDRA PARA CONTRATO DOCENTE 2024-II </div>
                        </div>
                    </td>
                    {{-- <td v-align="top" align="right" style="text-align:right; border:none;">
                        <div style="margin-top: 5px">
                            <img src="{{ public_path('imagenes/logoDAD.jpg')}}"  width="75">
                        </div>
                    </td> --}}
                </tr>
            </table>
        </div>

        <div style="border-bottom: solid .5px #000000; margin-top:0px;">
        </div>

        

    </div>
    <div id="footer">
    </div>

    <div>
        <div>
            <span style="font-size: 28pt; font-weight:bold;">CURRICULUM VITAE</span>
        </div>
        <table>
            <tr>
                <td> <span style="font-weight: 700;"> N° Doc. </span></td>                                    
                <td>:</td>
                <td style="width: 410px;"> {{ $candidato->nro_doc }} </td>
                <td rowspan="7" style="background: #e2e2e234; border: 2px solid black;" >
                    <div style="border: none; width: 140px; height:150px; text-align:center;">
                        Foto aquí
                    </div>
                </td>
            </tr>
            <tr>
                <td> <span style="font-weight: 700;"> Apellido</span></td>
                <td style="width: 10px;">:</td>
                <td> <span style="text-transform:capitalize;"> {{ strtolower($candidato->paterno) }} {{ strtolower($candidato->materno) }}</span></td>
            </tr>
            <tr>
                <td> <span style="font-weight: 700;"> Nombres</span></td>
                <td>:</td>
                <td> <span style="text-transform:capitalize;"> {{ strtolower($candidato->nombres) }}</span></td>
            </tr>
            <tr>
                <td> <span style="font-weight: 700;"> Procedencia </span></td>
                <td>:</td>
                <td> <span style="text-transform:capitalize;"> {{ strtolower($candidato->lugar) }}</span></td>
            </tr>
            <tr>
                <td> <span style="font-weight: 700;"> Dirección: </span></td>
                <td>:</td>
                <td> <span style="text-transform:capitalize;"> {{ strtolower($candidato->direccion) }}</span></td>
            </tr>
            {{-- <tr>
                <td style="width: 100px"> <span style="font-weight: 700;"> Sexo: </span></td>
                <td>:</td>
                <td> <span style="text-transform:capitalize;">{{ $candidato->sexo?"Masculino":"Femenino" }}</span></td>
            </tr> --}}
            <tr>
                <td style="width: 100px"> <span style="font-weight: 700;"> Celular </span></td>
                <td>:</td>
                <td> <span style="text-transform:capitalize;">{{ $candidato->celular }}</span></td>
            </tr>
            <tr>
                <td style="width: 100px"> <span style="font-weight: 700;"> Correo </span></td>
                <td>:</td>
                <td> <span style="text-transform:capitalize;">{{ strtolower($candidato->correo) }}</span></td>

            </tr>
        </table>
    </div>

    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:#920000;"> PLAZA A LA QUE POSTULA </span>
        </div>
    </div>

    {{----------------------- seccion 1 ------------------}}

    <div style="width: 100%; margin-top:20px; margin-bottom:20px; padding:6px 3px; background: #14204a;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:white;"> I. TITULOS Y GRADOS </span>
        </div>
    </div>

    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Titulo profesional </span>
        </div>
    </div>

    @if (isset($titulos) && !empty($titulos))
    <table class="table">
        <thead style="background: #e5e5e5">
            <th style="border:1px solid black;">N°</th>
            <th style="border:1px solid black;">Universidad</th>
            <th style="border:1px solid black;">Profesión</th>
            <th style="border:1px solid black;">Fecha expedición</th>
            <th style="border:1px solid black;">Registro SUNEDU</th>
        </thead>
        <tbody>
            @foreach ($titulos as $index=>$titulo)
            <tr>
                <td style="border:1px solid black;">{{ $index + 1 }}</td>
                <td style="border:1px solid black;"><div>{{ $titulo->institucion }}</div></td>
                <td style="border:1px solid black;"><div>{{ $titulo->denominacion }}</div></td>
                <td style="border:1px solid black;"><div>{{ $titulo->fec_expedicion }}</div></td>
                <td style="border:1px solid black;"><div style="text-align: center;">( {{ $titulo->reg_sunedu == 1? "SI":"NO"}} )</div></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <div>
            No tiene titulos registrados
        </div>        
    @endif


    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Maestrías</span>
        </div>
    </div>

    @if (isset($maestria) && !empty($titulos))
    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
    <table class="table">
        <thead style="background: #e5e5e5">
            <th style="border:1px solid black;">N°</th>
            <th style="border:1px solid black;">Universidad</th>
            <th style="border:1px solid black;">Profesión</th>
            <th style="border:1px solid black;">Fecha expedición</th>
            <th style="border:1px solid black;">Registro SUNEDU</th>
        </thead>
        <tbody>
            @foreach ($maestria as $index=>$titulo)
            <tr>
                <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                <td style="border:1px solid black;"><div>{{ $titulo->institucion }}</div></td>
                <td style="border:1px solid black;"><div>{{ $titulo->denominacion }}</div></td>
                <td style="border:1px solid black;"><div>{{ $titulo->fec_expedicion }}</div></td>
                <td style="border:1px solid black;"><div style="text-align: center;">( {{ $titulo->reg_sunedu == 1? "SI":"NO"}} )</div></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    @else
        <div>
            No tiene maestrías registradas
        </div>        
    @endif



    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Titulo de segunda especialidad profesional en Medicina Obtenida a través de residentado Médico</span>
        </div>
    </div>

    @if (isset($segundas) && !empty($titulos))
    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
    <table class="table">
        <thead style="background: #e5e5e5">
            <th style="border:1px solid black;">N°</th>
            <th style="border:1px solid black;">Universidad</th>
            <th style="border:1px solid black;">Profesión</th>
            <th style="border:1px solid black;">Fecha expedición</th>
            <th style="border:1px solid black;">Registro SUNEDU</th>
        </thead>
        <tbody>
            @foreach ($segundas as $index=>$titulo)
            <tr>
                <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                <td style="border:1px solid black;"><div>{{ $titulo->institucion }}</div></td>
                <td style="border:1px solid black;"><div>{{ $titulo->denominacion }}</div></td>
                <td style="border:1px solid black;"><div>{{ $titulo->fec_expedicion }}</div></td>
                <td style="border:1px solid black;"><div style="text-align: center;">( {{ $titulo->reg_sunedu == 1? "SI":"NO"}} )</div></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    @else
        <div>
            No tiene titulos de segunda especialidad registradas
        </div>        
    @endif


    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Doctorados</span>
        </div>
    </div>

    @if (isset($doctorado) && !empty($titulos))
    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Universidad</th>
                    <th style="border:1px solid black;">Profesión</th>
                    <th style="border:1px solid black;">Fecha expedición</th>
                    <th style="border:1px solid black;">Registro SUNEDU</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($doctorado as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->institucion }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->denominacion }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->fec_expedicion }}</div></td>
                    <td style="border:1px solid black;"><div style="text-align: center;">( {{ $titulo->reg_sunedu == 1? "SI":"NO"}} )</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No tiene Doctorados registradas
        </div>        
    @endif
    </div>


    {{------------------------- sección 2 -----------------------------}}
    
    <div style="width: 100%; margin-top:20px; margin-bottom:20px; padding:6px 3px; background: #14204a;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:white; text-trasform:uppercase;"> II. Estudios de posgrado y actualización </span>
        </div>
    </div>

    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Posdoctorado</span>
        </div>
    </div>

    @if (isset($posdoctorado))
    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Universidad</th>
                    <th style="border:1px solid black;">Denominación</th>
                    <th style="border:1px solid black;">semestres aprobados</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posdoctorado as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->institucion }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->denominacion }}</div></td>
                    <td style="border:1px solid black;"><div style="text-align: center;">{{ $titulo->semestres }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>


    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Estudios Posdoctorado</span>
        </div>
    </div>

    @if (isset($estudios_doctorado))
    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Universidad</th>
                    <th style="border:1px solid black;">Denominación</th>
                    <th style="border:1px solid black;">semestres aprobados</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($estudios_doctorado as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->institucion }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->denominacion }}</div></td>
                    <td style="border:1px solid black;"><div style="text-align: center;">{{ $titulo->semestres }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>


    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Diplomado universitario presencial</span>
        </div>
    </div>

    @if (isset($diploma_presencial))
    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Universidad</th>
                    <th style="border:1px solid black;">Denominación</th>
                    <th style="border:1px solid black;">semestres aprobados</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($diploma_presencial as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->institucion }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->denominacion }}</div></td>
                    <td style="border:1px solid black;"><div style="text-align: center;">{{ $titulo->semestres }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>


    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Diplomado universitario virtual</span>
        </div>
    </div>

    @if (isset($diploma_virtual))
    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Universidad</th>
                    <th style="border:1px solid black;">Denominación</th>
                    <th style="border:1px solid black;">semestres aprobados</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($diploma_virtual as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->institucion }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->denominacion }}</div></td>
                    <td style="border:1px solid black;"><div style="text-align: center;">{{ $titulo->semestres }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>


    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Congreso internacional (ponente)</span>
        </div>
    </div>

    @if (isset($congreso_internacional_ponente))
    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Institución</th>
                    <th style="border:1px solid black;">Denominación</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($congreso_internacional_ponente as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->institucion }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->denominacion }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>


    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Congreso internacional (asistente, organizador )</span>
        </div>
    </div>

    @if (isset($congreso_internacional_organizador_asistente))
    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Institución</th>
                    <th style="border:1px solid black;">Denominación</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($congreso_internacional_organizador_asistente as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->institucion }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->denominacion }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>


    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Congreso Nacional (ponente)</span>
        </div>
    </div>

    @if (isset($congreso_nacional_ponente))
    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Institución</th>
                    <th style="border:1px solid black;">Denominación</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($congreso_nacional_ponente as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->institucion }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->denominacion }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>


    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Congreso Nacional (organizador, asistente)</span>
        </div>
    </div>

    @if (isset($congreso_nacional_organizador_asistente))
    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Institución</th>
                    <th style="border:1px solid black;">Denominación</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($congreso_nacional_organizador_asistente as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->institucion }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->denominacion }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>


    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Cursos y seminarios con más de 40 horas</span>
        </div>
    </div>

    @if (isset($cursos_seminarios))
    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Institución</th>
                    <th style="border:1px solid black;">Denominación</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cursos_seminarios as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->institucion }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->denominacion }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>

    

    {{------------------------ seccion 3 ------------------------------}}

    <div style="width: 100%; margin-top:20px; margin-bottom:20px; padding:6px 3px; background: #14204a;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:white; text-trasform:uppercase;"> III. Investigaciones y publicaciones </span>
        </div>
    </div>

    
    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Articulo cientifico en Scopus </span>
        </div>
    </div>

    @if (isset($scopus))
    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Titulo</th>
                    <th style="border:1px solid black;">fecha publicación</th>
                    <th style="border:1px solid black;">Participacion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($scopus as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->titulo }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->fec_publicacion }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->participacion }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>


    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Articulo cientifico en Web of Science </span>
        </div>
    </div>

    @if (isset($web_of_science))
    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Titulo</th>
                    <th style="border:1px solid black;">fecha publicación</th>
                    <th style="border:1px solid black;">Participacion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($web_of_science as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->titulo }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->fec_publicacion }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->participacion }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>


    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Articulo cientifico en Wliey Online Library </span>
        </div>
    </div>

    @if (isset($wiley))
    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Titulo</th>
                    <th style="border:1px solid black;">fecha publicación</th>
                    <th style="border:1px solid black;">Participacion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($wiley as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->titulo }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->fec_publicacion }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->participacion }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>


    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Articulo cientifico en PubMed IEEE Xplore  </span>
        </div>
    </div>

    @if (isset($pubmed))
    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Titulo</th>
                    <th style="border:1px solid black;">fecha publicación</th>
                    <th style="border:1px solid black;">Participacion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pubmed as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->titulo }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->fec_publicacion }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->participacion }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>


    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Articulo cientifico en Mathematical Reviews </span>
        </div>
    </div>

    @if (isset($mathematical_reviews))
    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Titulo</th>
                    <th style="border:1px solid black;">fecha publicación</th>
                    <th style="border:1px solid black;">Participacion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mathematical_reviews as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->titulo }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->fec_publicacion }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->participacion }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>


    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Articulo cientifico en Medline </span>
        </div>
    </div>

    @if (isset($medline))
    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Titulo</th>
                    <th style="border:1px solid black;">fecha publicación</th>
                    <th style="border:1px solid black;">Participacion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($medline as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->titulo }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->fec_publicacion }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->participacion }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>


    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Articulo cientifico en SPIE Digital Library </span>
        </div>
    </div>

    @if (isset($spie))
    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Titulo</th>
                    <th style="border:1px solid black;">fecha publicación</th>
                    <th style="border:1px solid black;">Participacion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spie as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->titulo }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->fec_publicacion }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->participacion }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>


    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Articulo cientifico en McGraw-Hill </span>
        </div>
    </div>

    @if (isset($mcgraw))
    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Titulo</th>
                    <th style="border:1px solid black;">fecha publicación</th>
                    <th style="border:1px solid black;">Participacion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mcgraw as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->titulo }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->fec_publicacion }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->participacion }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>


    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Articulo cientifico en Springer </span>
        </div>
    </div>

    @if (isset($springer))
    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Titulo</th>
                    <th style="border:1px solid black;">fecha publicación</th>
                    <th style="border:1px solid black;">Participacion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($springer as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->titulo }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->fec_publicacion }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->participacion }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>


    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Articulo cientifico en Taylor & Francis Group </span>
        </div>
    </div>

    @if (isset($taylor))
    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Titulo</th>
                    <th style="border:1px solid black;">fecha publicación</th>
                    <th style="border:1px solid black;">Participacion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($taylor as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->titulo }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->fec_publicacion }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->participacion }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>


    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Articulo cientifico en EconLit </span>
        </div>
    </div>

    @if (isset($econlit))
    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Titulo</th>
                    <th style="border:1px solid black;">fecha publicación</th>
                    <th style="border:1px solid black;">Participacion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($econlit as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->titulo }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->fec_publicacion }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->participacion }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>


    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Articulo cientifico en ProQuest </span>
        </div>
    </div>

    @if (isset($proquest))
    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Titulo</th>
                    <th style="border:1px solid black;">fecha publicación</th>
                    <th style="border:1px solid black;">Participacion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($proquest as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->titulo }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->fec_publicacion }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->participacion }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>


    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Articulo cientifico en Bentham Science </span>
        </div>
    </div>

    @if (isset($bentham))
    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Titulo</th>
                    <th style="border:1px solid black;">fecha publicación</th>
                    <th style="border:1px solid black;">Participacion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bentham as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->titulo }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->fec_publicacion }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->participacion }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>


    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Articulo cientifico en Scielo </span>
        </div>
    </div>

    @if (isset($scielo))
    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Titulo</th>
                    <th style="border:1px solid black;">fecha publicación</th>
                    <th style="border:1px solid black;">Participacion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($scielo as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->titulo }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->fec_publicacion }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->participacion }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>


    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Articulo cientifico en Scielo </span>
        </div>
    </div>

    @if (isset($doaj))
    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Titulo</th>
                    <th style="border:1px solid black;">fecha publicación</th>
                    <th style="border:1px solid black;">Participacion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($doaj as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->titulo }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->fec_publicacion }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->participacion }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>


    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Articulo cientifico en Scielo </span>
        </div>
    </div>

    @if (isset($redalyc))
    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Titulo</th>
                    <th style="border:1px solid black;">fecha publicación</th>
                    <th style="border:1px solid black;">Participacion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($redalyc as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->titulo }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->fec_publicacion }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->participacion }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>


    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Articulo cientifico en Latindex </span>
        </div>
    </div>

    @if (isset($latindex))
    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Titulo</th>
                    <th style="border:1px solid black;">fecha publicación</th>
                    <th style="border:1px solid black;">Participacion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($latindex as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->titulo }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->fec_publicacion }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->participacion }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>


    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Autor de libro de reglamento de calificación, recalificación y registro de investigadores del sistema Nacional de Ciencia </span>
        </div>
    </div>

    @if (isset($registro_nacional_ciencia))
    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Titulo</th>
                    <th style="border:1px solid black;">fecha publicación</th>
                    <th style="border:1px solid black;">Participacion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($registro_nacional_ciencia as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->titulo }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->fec_publicacion }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->participacion }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>


    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Autor de libro Tecnlogía e innovación Tecnológica - Reglamento RENACYT </span>
        </div>
    </div>

    @if (isset($reglamento_renacyt))
    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Titulo</th>
                    <th style="border:1px solid black;">fecha publicación</th>
                    <th style="border:1px solid black;">Participacion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reglamento_renacyt as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->titulo }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->fec_publicacion }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->participacion }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>


    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;">Autor de capítulo de libro de reglamento de calificación, recalificación y registro de investigadores del sistema Nacional de Ciencia </span>
        </div>
    </div>

    @if (isset($reglamento_calificacion))
    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Titulo</th>
                    <th style="border:1px solid black;">fecha publicación</th>
                    <th style="border:1px solid black;">Participacion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reglamento_calificacion as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->titulo }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->fec_publicacion }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->participacion }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>


    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;">Autor de capitulo de Libro Tecnlogía e innovación Tecnológica - Reglamento RENACYT </span>
        </div>
    </div>

    @if (isset($capitulo_renacyt))
    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Titulo</th>
                    <th style="border:1px solid black;">fecha publicación</th>
                    <th style="border:1px solid black;">Participacion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($capitulo_renacyt as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->titulo }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->fec_publicacion }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->participacion }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>


    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Jurado de tesis de pregrado </span>
        </div>
    </div>

    @if (isset($jurado_pregado))
    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Titulo</th>
                    <th style="border:1px solid black;">fecha publicación</th>
                    <th style="border:1px solid black;">Participacion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jurado_pregrado as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->titulo }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->fec_publicacion }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->participacion }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>


    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Asesor de tesis de posgrado </span>
        </div>
    </div>

    @if (isset($asesor_posgrado))
    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Titulo</th>
                    <th style="border:1px solid black;">fecha publicación</th>
                    <th style="border:1px solid black;">Participacion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($asesor_posgrado as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->titulo }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->fec_publicacion }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->participacion }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>


    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Jurado de tesis de posgrado </span>
        </div>
    </div>

    @if (isset($jurado_posgrado))
    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Titulo</th>
                    <th style="border:1px solid black;">fecha publicación</th>
                    <th style="border:1px solid black;">Participacion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jurado_posgrado as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->titulo }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->fec_publicacion }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->participacion }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>




    {{------------------------ seccion 4 ------------------------------}}

    <div style="width: 100%; margin-top:20px; margin-bottom:20px; padding:6px 3px; background: #14204a;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:white; text-trasform:uppercase;"> IV. EXPERIENCIA PROFESIONAL NO DOCENTE UNIVERSITARIA </span>
        </div>
    </div>

    
    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Experiencia no docente </span>
        </div>
    </div>

    @if (isset($experiencia_no_docente))

    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Cargo</th>
                    <th style="border:1px solid black;">Institucion</th>
                    <th style="border:1px solid black;">Años</th>
                    <th style="border:1px solid black;">meses</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($experiencia_no_docente as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->cargo }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->institucion }}</div></td>
                    <td style="border:1px solid black;"><div style="text-align: center">{{ floor( $titulo->duracion / 12)  }}</div></td>
                    <td style="border:1px solid black;"><div style="text-align: center">{{ $titulo->duracion % 12 }}</div></td> 
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>



    {{------------------------ seccion 5 ------------------------------}}
    
    <div style="width: 100%; margin-top:20px; margin-bottom:20px; padding:6px 3px; background: #14204a;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:white; text-trasform:uppercase;"> V. EXPERIENCIA EN DOCENCIA UNIVERSITARIA </span>
        </div>
    </div>

    
    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Experiencia docente</span>
        </div>
    </div>

    @if (isset($experiencia_docente))

    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Cargo</th>
                    <th style="border:1px solid black;">Institucion</th>
                    <th style="border:1px solid black;">semestres</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($experiencia_docente as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->cargo }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->institucion }}</div></td>
                    <td style="border:1px solid black;"><div style="text-align: center">{{ floor( $titulo->duracion)  }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>




    {{------------------------ Sección 6 ------------------------------}}


    <div style="width: 100%; margin-top:20px; margin-bottom:20px; padding:6px 3px; background: #14204a;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:white; text-trasform:uppercase;"> VI. MANEJO EN EL USO DE SOFTWARE ESPECIALIZADO</span>
        </div>
    </div>

    
    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Cursos con mas de 40 horas </span>
        </div>
    </div>

    @if (isset($software_mayor_40))

    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Mención</th>
                    <th style="border:1px solid black;">Institucion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($software_mayor_40 as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->descripcion }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->institucion }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>


    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Cursos con menos de 40 horas </span>
        </div>
    </div>

    @if (isset($software_menor_40))

    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Mención</th>
                    <th style="border:1px solid black;">Institucion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($software_menor_40 as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->descripcion }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->institucion }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>



    {{------------------------ Sección 7 Idiomas ------------------------------}}


    <div style="width: 100%; margin-top:20px; margin-bottom:20px; padding:6px 3px; background: #14204a;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:white; text-trasform:uppercase;"> VII. IDIOMAS (EXTRANJERO O NATIVO)</span>
        </div>
    </div>

    
    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Idioma(s) </span>
        </div>
    </div>

    @if (isset($idiomas))

    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Idioma</th>
                    <th style="border:1px solid black;">Nivel</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($idiomas as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->idioma }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->nivel }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>


    {{------------------------ Sección 8 IDIOMAS ---------------------------}}

    <div style="width: 100%; margin-top:20px; margin-bottom:20px; padding:6px 3px; background: #14204a;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:white; text-trasform:uppercase;"> VII. IDIOMAS (EXTRANJERO O NATIVO)</span>
        </div>
    </div>

    
    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Quinto superior de su promoción  </span>
        </div>
    </div>

    @if (isset($quinto))

    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Descripcion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($quinto as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->descripcion }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>


    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Tercio superior de su promoción  </span>
        </div>
    </div>

    @if (isset($tercio))

    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Descripcion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tercio as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->descripcion }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>


    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Ayudante de Cátedra </span>
        </div>
    </div>

    @if (isset($ayudante_catedra))

    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Descripcion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ayudante_catedra as $index=>$titulo)
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->descripcion }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>


    {{------------------------ SECCIÓN 9 ACTIVIDAD DE EXTENSION SOCIAL ---------------------------}}

    <div style="width: 100%; margin-top:20px; margin-bottom:20px; padding:6px 3px; background: #14204a;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:white; text-trasform:uppercase;"> IX. Actividades de extensión cultural, proyección y responsabilidad social en la especialidad </span>
        </div>
    </div>

    
    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Actividades con Resolución Rectoral </span>
        </div>
    </div>

    @if (isset($rectoral))

    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Actividad</th>
                    <th style="border:1px solid black;">Resolucion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rectoral as $index=>$titulo) 
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->actividad }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->resolucion }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>


    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Actividades con Resolución Directoral </span>
        </div>
    </div>

    @if (isset($directoral))

    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Actividad</th>
                    <th style="border:1px solid black;">Resolucion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($directoral as $index=>$titulo) 
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->actividad }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->resolucion }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>


    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Actividades con Resolución Decanal </span>
        </div>
    </div>

    @if (isset($decanal))

    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Actividad</th>
                    <th style="border:1px solid black;">Resolucion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($decanal as $index=>$titulo) 
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->actividad }}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->resolucion }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>


    {{------------------------ SECCIÓN 10 BONIFICACIÓN ---------------------------}}

    <div style="width: 100%; margin-top:20px; margin-bottom:20px; padding:6px 3px; background: #14204a;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:white; text-trasform:uppercase;"> X. Bonificación </span>
        </div>
    </div>

    
    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Profesionales RENACYT </span>
        </div>
    </div>

    @if (isset($profesional_renacyt))

    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Descripción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($profesional_renacyt as $index=>$titulo) 
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->descripcion }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>

    <div style="width: 100%; margin-top:20px; margin-bottom:20px;">
        <div style="padding-bottom: 5px;">
            <span style="font-size:14pt; font-weight:bold; color:black;"> Egresado UNAP </span>
        </div>
    </div>

    @if (isset($egresado_unap))

    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <thead style="background: #e5e5e5">
                <tr>
                    <th style="border:1px solid black;">N°</th>
                    <th style="border:1px solid black;">Descripción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($egresado_unap as $index=>$titulo) 
                <tr>
                    <td style="border:1px solid black;" width="20px"><div style="text-align: center;">{{ $index + 1}}</div></td>
                    <td style="border:1px solid black;"><div>{{ $titulo->descripcion }}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div>
            No registra
        </div>        
    @endif
    </div>

    <div class="tabla-container" style="page-break-inside: avoid; margin-bottom: 40px;">
        <table class="table">
            <tbody>
                <tr>
                    <td colspan="2"> 
                        <div style="text-align:justify; margin-bottom:15px;">
                            <p style="line-height: 1.6rem;">
                                YO, <span style="text-transform:uppercase;">{{ strtolower($candidato->nombres) }} {{ strtolower($candidato->paterno) }} {{ strtolower($candidato->materno) }}</span>, IDENTIFICADO CON DNI Nº {{$candidato->nro_doc }}  DECLARO BAJO
                                JURAMENTO, QUE LA INFORMACION ARRIBA MENCIONADA ES FIDEDIGNA Y MOSTRARÉ LOS
                                ORIGINALES EN EL MOMENTO DE MI INSCRIPCION.
                            </p>

                        </div>

                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Puno, ____ de _________________ del 2024</td>
                </tr>

                <tr>
                    <td align="center" style="width: 50%;">
                        <div style="text-align: center;">________________________________</div>
                        <div style="text-align: center;">
                            <span style="text-transform:uppercase; font-size:9pt;">{{ strtolower($candidato->nombres) }} {{ strtolower($candidato->paterno) }} {{ strtolower($candidato->materno) }}</span>
                        </div>
                    </td>
                    <td align="left"  style="width: 50%;">
                        <div style="margin-top:15px; border:solid 1px black; width:120px; height:160px; text-align:center;">
                            <span style="font-size: 7pt;">HUELLA DACTILAR</span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


    <div id="footer">

    </div>

    <script type="text/php">
        if ( isset($pdf) ) {
            $pdf->page_script('
                $font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "normal");
                $pdf->text(270, 810, "Pág $PAGE_NUM de $PAGE_COUNT", $font, 9);
            ');
        }
    </script>

</body>
</html>