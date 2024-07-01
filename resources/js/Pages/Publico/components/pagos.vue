<template>
<div class="container flex justify-center pb-12">
<div>


<div class="flex justify-center mt-12"><span class="font-bold" style="font-size: 1.6rem; color: #333;">PAGOS</span></div>
<div class="flex justify-center mb-6">
  <div style="width: 60px; border-bottom: 3px solid #00a0c8;">

  </div>  
</div>
<div style="min-width: 420px; background: yellow; display: flex;">
  <div class="w-full" style="background: yellow;">
    <table style="background: white; width: 100%;">
      <tr>
        <th><span class="font-bold">RUBRO</span></th>
        <th><span class="font-bold">MONTO</span></th>
      </tr>
      <tr>
        <td>Reglamento de Concurso</td>
        <td align="center" >S/. 200.00</td>
      </tr>
      <tr>
        <td>
          <div>
            Inscripción al Concurso A-1
          </div>
        </td>
        <td align="center">S/. 400.00</td>
      </tr>
      <tr>
        <td>
          <div> Inscripción al Concurso A-2</div>
        </td>
        <td align="center">S/. 200.00</td>
      </tr>
      <tr>
        <td>
          <div>Inscripción al Concurso A-3</div>
        </td>
        <td align="center"> S/ 100.00</td>
      </tr>
      <tr>
        <td>Inscripción al Concurso B-1</td>
        <td align="center">S/ 200.00</td>
      </tr>
      <tr>
        <td>Inscripción al Concurso B-2</td>
        <td align="center">S/ 150.00</td>
      </tr>
      <tr>
        <td>Inscripción al Concurso B-13</td>
        <td align="center">S/ 100.00</td>
      </tr>    
      <tr>
        <td>Inscripción extemporánea</td>
        <td align="center">S/ 300.00</td>
      </tr>    
      <tr>
        <td>Plaza adicional</td>
        <td align="center">S/ 100.00</td>
      </tr>    

    </table>
  </div>
</div>

</div>
</div>
</template>

<script setup>
import Layout from '@/Layouts/Formulario/FormularioLayout.vue';
import { Link } from '@inertiajs/vue3';
</script>

<style scope>
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
