<template>
<div class="container my-12 lg:px-24">
  <div class="flex justify-center mb-2"><span class="font-bold" style="font-size: 1.6rem; color: #333;">ANEXOS</span></div>
    <div class="flex justify-center mb-5">
    <div style="width: 60px; border-bottom: 3px solid #00a0c8;"> </div>
  </div>

  <div>
    <a-collapse v-for="(ite,index) in requisitos" v-model:activeKey="activeKey">
      <a-collapse-panel class="mb-2" :key="index" :header="ite.titulo +'. '+ite.anexo">
        <template #extra>
          <a-button style="width: 30px; padding-left: 7px; background: white; border:none; color:green;" >
            <template #icon>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
            </template>
          </a-button>
        </template>

        <iframe :src="baseUrl+'/'+ite.url" width="100%" height="400px"></iframe>
      </a-collapse-panel>
    </a-collapse>
  </div>
</div>
</template>

<script setup>
import {ref } from 'vue';
import Layout from '@/Layouts/Formulario/FormularioLayout.vue';
import { Link } from '@inertiajs/vue3';
const baseUrl = window.location.origin;

const activeKey = ref(null)
const requisitos = ref([
  {
    titulo:"ANEXO 1",
    anexo:"MODELO DE SOLICITUD PARA CONTRATO DOCENTE",
    url:"storage/anexos/01.pdf"
  },
  {
    titulo:"ANEXO 2",
    anexo:"DECLARACIÓN JURADA DE HABER CUMPLIDO CON EL SERVICIO RURAL URBANO MARGINAL DE SALUD (SERUMS)",
    url:"storage/anexos/02.pdf"
    },
  {
    titulo:"ANEXO 3",
    anexo:"DECLARACIÓN JURADA DE NO ESTAR INCURSO EN NINGUNA DE LAS INCOMPATIBILIDADES ESTABLECIDAS EN LA LEY, EL ESTATUTO O SUS NORMAS CONEXAS",
    url:"storage/anexos/03.pdf"
  },
  {
    titulo:"ANEXO 4",
    anexo:"DECLARACIÓN JURADA DE NO ESTAR IMPEDIDO PARA EL EJERCICIO DE LA FUNCIÓN PÚBLICA",
    url:"storage/anexos/04.pdf"
  },
  {
    titulo:"ANEXO 5",
    anexo:"DECLARACIÓN JURADA DE NO HABER SIDO SENTENCIADO POR DELITO DOLOSO MEDIANTE SENTENCIA JUDICIAL EN LA CONDICIÓN DE FIRME, CONSENTIDA O EJECUTORIADA",
    url:"storage/anexos/05.pdf"
  },
  {
    titulo:"ANEXO 6",
    anexo:"DECLARACIÓN JURADA DE NO HABER SIDO SANCIONADO POR EL INSTITUTO NACIONAL DE DEFENSA DE LA COMPETENCIA Y DE LA PROTECCIÓN DE LA PROPIEDAD INTELECTUAL (INDECOPI) POR PLAGIO Y OTRAS FALTAS CONTRA LA PROPIEDAD INTELECTUAL",
    url:"storage/anexos/06.pdf"
  },
  {
    titulo:"ANEXO 7",
    anexo:"DECLARACIÓN JURADA NO TENER ANTECEDENTES JUDICIALES NI PENALES",
    url:"storage/anexos/07.pdf"
  },
  {
    titulo:"ANEXO 8",
    anexo:"DECLARACIÓN JURADA DE NO HABER SIDO CONDENADO, SENTENCIADO O ESTAR PROCESADO JUDICIALMENTE POR LOS DELITOS DE TERRORISMO, APOLOGÍA DEL TERRORISMO, VIOLACIÓN DE LA LIBERTAD SEXUAL Y TRÁFICO ILÍCITO DE DROGAS LEY No29988",
    url:"storage/anexos/08.pdf"
  },
  {
    titulo:"ANEXO 9",
    anexo:"DECLARACIÓN JURADA DE NO ENCONTRARSE INSCRITO EN EL REGISTRO DE DEUDORES ALIMENTARIOS MOROSOS-REDAM",
    url:"storage/anexos/09.pdf"
  },
  {
    titulo:"ANEXO 10",
    anexo:"DECLARACIÓN JURADA DE NO HABER SIDO DESTITUIDO, DESPEDIDO O HABÉRSELE RESUELTO CONTRATO POR FALTA ADMINISTRATIVA GRAVE (LEY N.°26488)",
    url:"storage/anexos/10.pdf"
  },
  {
    titulo:"ANEXO 11",
    anexo:"DECLARACIÓN JURADA DE NO HABER INCURRIDO EN INASISTENCIAS INJUSTIFICADAS A SU FUNCIÓN DOCENTE",
    url:"storage/anexos/11.pdf"
  },
  {
    titulo:"ANEXO 12",
    anexo:"DECLARACIÓN JURADA DE NO HABER SIDO DESAPROBADO EN LA EVALUACIÓN DE DESEMPEÑO DOCENTE DE PARTE DE LOS ESTUDIANTES, REGLAMENTO DE EVALUACIÓN DE DESEMPEÑO DOCENTE UNA - PUNO",
    url:"storage/anexos/12.pdf"
  },
  {
    titulo:"ANEXO 13",
    anexo:"DECLARACIÓN JURADA DE NO ADEUDAR AL ESTADO POR CONCEPTO DE REPARACIÓN CIVIL",
    url:"storage/anexos/13.pdf"
  },
  {
    titulo:"ANEXO 14",
    anexo:"DECLARACIÓN JURADA DE AUTENTICIDAD DE LOS DOCUMENTOS",
    url:"storage/anexos/14.pdf"
  },
  {
    titulo:"ANEXO 15",
    anexo:"DECLARACIÓN JURADA DE NO ESTAR COMPRENDIDO EN EL REGISTRO NACIONAL DE SANCIONES CONTRA SERVIDORES CIVILES (RNSSC)",
    url:"storage/anexos/15.pdf"
  },
  {
    titulo:"ANEXO 16",
    anexo:"DECLARACIÓN JURADA DE NO TENER RELACIÓN DE CONSANGUINIDAD NI AFINIDAD",
    url:"storage/anexos/16.pdf"
  },
  {
    titulo:"ANEXO 17",
    anexo:"DECLARACIÓN JURADA DE HABILIDAD PROFESIONAL",
    url:"storage/anexos/17.pdf"
  },
  {
    titulo:"ANEXO 18",
    anexo:"DECLARACIÓN JURADA DE SERVICIO MILITAR",
    url:"storage/anexos/18.pdf"
  },
  
])
</script>