    <!DOCTYPE html>
    <html>
    <head>
        <title>Hi</title>
        <style> 
            *{margin:0;padding:0}
        </style>
    </head>
    <body style="font-family: 'Gill Sans Extrabold', Helvetica, sans-serif; margin:15px; border:solid 1px #00000075; padding:10px 10px;">
        <div style="">
            <table style="width:100%; padding:0px 10px;" >
                <tr>
                    <td rowspan="1" style="width: 70px">

                            <img src="{{ $logo_unap }}" alt="" width="70">
                    </td>
                    <td align="center" style="font-size:14pt;">
                        <div style="margin-left:10px; font-size: 18pt; font-weight:bold;  margin-top:10px;">UNIVERSIDAD NACIONAL DEL ALTIPLANO</div>
                        <div style="margin-left:10px; margin-top:3px;" >CONCURSO DE CATEDRA CONTRATO 2024-II</div>
                    </td>
                    <td align="right" rowspan="1"> <img src="{{ $logo_concurso }}"  width="74"></td>
                </tr>
            </table>
            <table style="width:100%; bakcground:orange; margin-top:15px;">
                <tr>
                    <td width="130"></td>
                    <td align="center" valign="center" style="font-size:32pt; font-weight:700;">INVITACIÓN</td>
                    <td align="right" style="width:130px;"> 
    
                    </td>
                </tr>
            </table>
            <table style="width:100%; bakcground:orange; margin-top:15px;">
                <tr>
                    <td>
                        <div style="text-align:justify; font-size:19pt; padding:0px 20px; font-style: italic;">
                            La Comisión de Concurso Público de Cátedra le extiende una cordial invitación al sorteo de docentes 
                            nombrados para participar en el proceso de elaboración de prueba.
                        </div>

                    </td>
                </tr>
            </table>

            <table style="width:100%; bakcground:orange; margin-top:45px;">
                <tr>
                    <td align="left">
                        <div style="font-size:17pt; padding:0px 20px; font-style: italic;">
                            <div><span style="font-weight:bold;">Fecha: </span>Martes, 23 de julio de 2024</div>
                            <div><span style="font-weight:bold;">Hora: </span> 06:00 a.m. </div>
                            <div><span style="font-weight:bold;">Lugar:</span> Auditorio Magno</div>
                        </div>
                    </td>
                    <td align="center" style="margin-left: 10px;">
                        <div> <span style="font-size:36pt;"><?php echo DNS1D::getBarcodeHTML('70757838','C128',3.2,80);?> </span> </div>
                        <div> <span style="font-size:12pt; margin-left:-40px; font-weight: 400;">N° 000130 - 70757838 </span></div>

                    </td>
                </tr>
            </table>

            </table>

            <table style="width:100%; margin-top:15px;">
                <tr>
                    <td  style="width: 400px; background:#bebebe48; padding:10px 0px;">
                        <div style="font-size:14pt; padding:0px 20px; font-style: italic;">
                            <div><span style="font-weight:bold;">Para: </span><span style="text-transform: capitalize;">Luque Cusacani, Jhon Ariel</span></div>
                            <div style="margin-top: 5px;" ><span style="font-weight:bold;">Escuela: </span><span style="text-transform: capitalize;">Ingeniería de Sistemas</span></div>
                        </div>
                    </td>
                    {{-- <td align="right" style="margin-right: 15px;"> 
                        <span style="font-size:36pt;"><?php echo DNS1D::getBarcodeHTML('70757838','C128',4,75);?> </span>
                    </td> --}}
                </tr>
                
            </table>

        </div>

    </body>
    </html>