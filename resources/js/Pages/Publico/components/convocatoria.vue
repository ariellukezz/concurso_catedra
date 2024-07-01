<template>
<div class="my-12 mb-16">
<div class="flex justify-center mb-2"><span class="font-bold" style="font-size: 1.6rem; color: #333;">CONVOCATORIA</span></div>
<div class="flex justify-center mb-5">
  <div style="width: 60px; border-bottom: 3px solid #00a0c8;">

  </div>
</div>

<div>
  <div class="container px-14">
    <div class="text-lg" style="text-align: center;" >
      <p style="line-height: 2rem;">
        La Universidad Nacional del Altiplano Puno convoca a Concurso Público de Cátedra 2024-II para contrato docente, 
        en cumplimiento de la resolución rectoral. 
        Invitamos a los interesados a postularse y unirse a nuestra institución.
      </p>
    </div>

    <div class="flex justify-center mt-4">
      <div class="mr-3">
        <a-button style=" height: 38px; border: solid 1px #00a0c8; color: #00a0c8; "> Ver reglamento</a-button>
      </div>
      <div>
        <a-button style=" height: 38px; background: #00a0c8; color:white; border:none;" > Inscribirme</a-button>
      </div>
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
