<!DOCTYPE html>
<html>
<head>
    <title>Invitaciones</title>
    <style> 
        * { margin: 0; padding: 0; }
    </style>
</head>
<body style="font-family: 'Gill Sans Extrabold', Helvetica, sans-serif; margin: 15px;">

    <table style="width: 100%;">
        @for ($i = 1; $i <= 4; $i++)
            @if ($i % 2 == 1)
                <tr>
            @endif
            <td style="width: 50%; padding: 10px;">
                <table style="width: 100%; padding: 10px;">
                    <tr>
                        <td rowspan="1" style="width: 30px;">
                            <img src="{{ $logo_unap }}" alt="" width="30">
                        </td>
                        <td align="center" style="font-size: 7pt;">
                            <div style="margin-left: 5px; font-size: 8pt; font-weight: bold; margin-top: 10px;">UNIVERSIDAD NACIONAL DEL ALTIPLANO</div>
                            <div style="margin-left: 4px; margin-top: 3px;">CONCURSO DE CATEDRA CONTRATO 2024-II</div>
                        </td>
                        <td align="right" rowspan="1">
                            <img src="{{ $logo_concurso }}" width="34">
                        </td>
                    </tr>
                </table>
                <table style="width: 100%; margin-top: 4px;">
                    <tr>
                        <td align="center" valign="center" style="font-size: 12pt; font-weight: 700;">INVITACIÓN</td>
                    </tr>
                </table>
                <table style="width: 100%; margin-top: 5px;">
                    <tr>
                        <td>
                            <div style="text-align: justify; font-size: 8pt; padding: 0px 20px; font-style: italic;">
                                La Comisión de Concurso Público de Cátedra le extiende una cordial invitación al sorteo de docentes 
                                nombrados para participar en el proceso de elaboración de prueba de conocimientos.
                            </div>
                        </td>
                    </tr>
                </table>
                <table style="width: 100%; margin-top: 10px;">
                    <tr>
                        <td align="left">
                            <div style="font-size: 7pt; padding: 0px 20px; font-style: italic;">
                                <div><span style="font-weight: bold;">Fecha: </span>Martes, 23 de julio de 2024</div>
                                <div><span style="font-weight: bold;">Hora: </span>06:00 a.m.</div>
                                <div><span style="font-weight: bold;">Lugar:</span> Auditorio Magno</div>
                            </div>
                        </td>
                        <td align="center" style="margin-left: 10px;">
                            <div style="margin-bottom: 0px;">
                                <span style="font-size: 6pt; margin-left: -15px; font-weight: 400;">N° 000130 - 70757838</span>
                            </div>
                            <div style="margin-bottom: -10px;">
                                <span style="font-size: 16pt;"><?php echo DNS1D::getBarcodeHTML('70757838','C128',1.2,26);?></span>
                            </div>
                        </td>
                    </tr>
                </table>
                <table style="width: 100%; margin-top: -5px;">
                    <tr>
                        <td style="padding: 5px 0px;">
                            <div style="font-size: 7pt; padding: 0px 20px; font-style: italic;">
                                <div><span style="font-weight: bold;">Para: </span>Luque Cusacani, Jhon Ariel</div>
                                <div><span style="font-weight: bold;">Escuela: </span>Ingeniería de Sistemas</div>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
            @if ($i % 2 == 0 || $i == 6)
                </tr>
            @endif
        @endfor
    </table>

</body>
</html>
