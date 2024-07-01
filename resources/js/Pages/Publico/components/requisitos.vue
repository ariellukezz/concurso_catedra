<template>
<div class="container my-12 lg:px-24">
  <div class="flex justify-center mb-2"><span class="font-bold" style="font-size: 1.6rem; color: #333;">REQUISITOS</span></div>
    <div class="flex justify-center mb-5">
    <div style="width: 60px; border-bottom: 3px solid #00a0c8;"> </div>
  </div>

  <div>
    <a-row :gutter="16">
      <a-col v-for="ite in requisitos" :key="it"  :xs="24" :sm="24" :md="24" :lg="24">
        <a-card class="mb-4" style=" color:black;">
          <div class="flex">
              <a-button class="mr-2 bg-gray-500 text-white text-bold" > {{  ite.numero }}</a-button>
            <div style="text-align: justify;">
              <p>
                {{ ite.requisito }}
              </p>

            </div>

          </div>
        </a-card>
      </a-col>
    </a-row>

  </div>

</div>
</template>

<script setup>
import {ref } from 'vue';

import Layout from '@/Layouts/Formulario/FormularioLayout.vue';
import { Link } from '@inertiajs/vue3';


const requisitos = ref([
  {
    numero:"1",
    requisito:"Título Profesional Universitario en la especialidad, registrado en SUNEDU. Títulos extranjeros deben estar reconocidos o revalidados en Perú."
  },
  {
    numero:"2",
    requisito:"Grado Académico de Doctor en la especialidad, registrado en SUNEDU. Grados extranjeros deben estar revalidados en Perú."
  },
  {
    numero:"3",
    requisito:"Acreditar mínimo cinco (5) años de ejercicio profesional (docente y no docente), sustentados con contratos de trabajo, resoluciones o actos administrativos que acrediten vínculo laboral."
  },
  {
    numero:"4",
    requisito:"Habilitación del Colegio Profesional de su especialidad. Para carreras sin colegio profesional, presentar declaración jurada (Anexo 17)."
  },
  {
    numero:"5",
    requisito:"No haber sido condenado por delito doloso."
  },
  {
    numero:"6",
    requisito:"No haber recibido sanción por separación o destitución de cargo público o de alguna universidad. No haber renunciado a la labor docente en la UNA – PUNO en los dos (02) últimos semestres."
  },
  {
    numero:"7",
    requisito:"Adjuntar recibo de pago en original por las tasas correspondientes al Concurso Público de Cátedra 2024 - II."
  },
  {
    numero:"8",
    requisito:"No estar impedido para el ejercicio de la función pública."
  },
  {
    numero:"9",
    requisito:"No tener relación de parentesco con el personal docente del departamento académico a la que postula que tenga injerencia directa o indirecta en el proceso del concurso."
  }
  
])
</script>