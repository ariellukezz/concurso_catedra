<template>
<div class="pb-12">
<div class="flex justify-center mb-2 mt-14"><span class="font-bold" style="font-size: 1.6rem; color: #333;">CRONOGRAMA</span></div>
<div class="flex justify-center mb-6">
  <div style="width: 60px; border-bottom: 3px solid #00a0c8;">

  </div>
</div>

<div>
  <table>
    <tr>
      <th><span class="font-bold">DETALLE</span></th>
      <th><span class="font-bold">FECHA</span></th>
    </tr>
    <tr>
      <td>Convocatoria</td>
      <td align="center" >21 de Junio del 2024</td>
    </tr>
    <tr>
      <td>
        <div>
          <div>Pago por concepto de:</div>
          <div>DERECHO <span class="font-bold">CONCURSO DE CÁTEDRA</span>(Inscripción + Reglamento)</div>   
          <div>Banco de la nación</div>
          <div>Cuenta 137: Tasas Educativas de la Universidad Nacional del Altiplano</div>
        </div>
      </td>
      <td align="center">Del 8 al 15 de junio del 2024</td>
    </tr>
    <tr>
      <td>
        <div> INSCRIPCIÓN Y RECEPCIÓN DE EXPEDIENTES (virtual y físico) SEGÚN EL ÚLTIMO DÍGITO DE DNI QUE CORRESPONDA</div>
      </td>
      <td align="center">Del 09 al 15 de julio del 2024</td>
    </tr>
    <tr>
      <td>
        <div>INSCRIPCIÓN EXTEMPORÁNEA</div>
      </td>
      <td align="center">15 de julio del 2024</td>
    </tr>
    <tr>
      <td>PUBLICACIÓN DE APTOS</td>
      <td align="center">17 de julio del 2024</td>
    </tr>
    <tr>
      <td>PRESENTACIÓN DE RECLAMOS</td>
      <td align="center">18 de julio del 2024</td>
    </tr>
    <tr>
      <td>ABSOLUCIÓN DE RECLAMOS</td>
      <td align="center">19 de julio del 2024</td>
    </tr>    
    <tr>
      <td>CALIFICACIÓN DE EXPEDIENTES</td>
      <td align="center">22 de julio del 2024</td>
    </tr>

    <tr>
      <td style="padding: 0px;">
        <div style="border-bottom: 1px solid #5e5e5e; width: 100%; padding: 12px 15px;">
          SORTEO DE DOCENTES PARA LA PRUEBA DE CONOCIMIENTO PRUEBA DE CONOCIMIENTO
        </div>
        <div style="width: 100%; padding: 12px 15px;">
          PRUEBA DE CONOCIMIENTO
        </div>
      </td>
      <td align="center">23 de julio del 2024</td>
    </tr>

    <tr>
      <td style="padding: 0px;">
        <div style="border-bottom: 1px solid #5e5e5e; width: 100%; padding: 12px 15px;">
          SORTEO DE JURADOS PARA CLASE MODELO Y ENTREVISTA PERSONAL
        </div>
        <div style="width: 100%; padding: 12px 15px;">
          SORTEO DE TEMAS PARA CLASE MODELO Y ENTREVISTA PERSONAL
        </div>
      </td>
      <td align="center" >24 de julio del 2024</td>
    </tr>

    <tr>
      <td style="padding: 0px;">
        <div style="border-bottom: 1px solid #5e5e5e; width: 100%; padding: 12px 15px;">
          APERTURA DE SOBRES Y DECLARACIÓN DE GANADORES EN CONSEJO DE FACULTAD
        </div>
        <div style="width: 100%; padding: 12px 15px;">
          APROBACIÓN DEL CONTRATO EN CONSEJO UNIVERSITARIOSORTEO DE TEMAS PARA CLASE MODELO Y ENTREVISTA PERSONAL
        </div>
      </td>
      <td rowspan="2" align="center" >25 de julio del 2024</td>
    </tr>

  </table>
</div>

<div class="flex justify-center mt-12">
  <table style="width: 100%;">
    <tr>
      <th colspan="2"><span class="font-bold text-xl">CRONOGRAMA DE INSCRIPCIÓN POR ORDEN DEL ÚLTIMO DÍGITO DEL DNI</span></th>
    </tr>
    <tr>
      <th><span class="font-bold">DETALLE</span></th>
      <th><span class="font-bold">FECHA</span></th>
    </tr>
    <tr>
      <td>Inscripción de postulante cuyo digito del DNI es 0 – 1</td>
      <td align="center">09 de julio del 2024</td>
    </tr>

    <tr>
      <td>Inscripción de postulante cuyo digito del DNI es 2 – 3 – 4</td>
      <td align="center">10 de julio del 2024</td>
    </tr>
    <tr>
      <td>Inscripción de postulante cuyo digito del DNI es 5 – 6</td>
      <td align="center">11 de julio del 2024</td>
    </tr>
    <tr>
      <td>Inscripción de postulante cuyo digito del DNI es 7 - 8 - 9</td>
      <td align="center">12 de julio del 2024</td>
    </tr>
    <tr>
      <td>Inscripción de EXTEMPORÁNEA (Todos los dígitos del DNI)</td>
      <td align="center">15 de julio del 2024</td>
    </tr>      
  </table>
</div>

</div>
</template>

<script setup>
import Layout from '@/Layouts/Formulario/FormularioLayout.vue';
import { Link } from '@inertiajs/vue3';
</script>

<style scoped>
.table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    text-align: left;
    font-family: 'Helvetica, sans-serif';
}

th, td {
    padding: 12px 15px;
    border: 1px solid #5e5e5e;
    font-size: 11pt !important;
}

th {
    background-color: #00a0c851;
    font-family: 'Helvetica';
    font-weight: 700;
}


tr:nth-child(even) {
    background-color: none;
}

tr:hover {
    background-color: #00a0c844;
    color:#002457;
    font-weight: bold;
}

td:first-child {
    font-weight: regular;
}


</style>
