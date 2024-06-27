<template>
<Head title="Registro CV"/>
<Layout>
<div class="grid"  style="height: calc(100vh - 115px);">
  <div class="container lg:px-12 mx-auto">
    <div>
      <div><Descripcion/> </div>    
      <div><DatosPersonales/></div>    
      <div><Titulos/> </div>
      <div><Estudios/> </div>
      <div><Publicaciones/> </div>
      <div><NoDocente/> </div>
      <div><ExDocente/> </div>
      <div><ManejoSoftware/> </div>
      <div><Idiomas/> </div>
      <div><Reconocimiento/> </div>
      <div><Proyeccion/> </div>
      <div><Bonificacion/> </div>
      <div><Inscripcion/> </div>
    </div>
  </div>    
  <div>
  <Footer/>
</div>
</div>

</Layout>
</template>
    
<script setup>

import Layout from '@/Layouts/Formulario/FormularioLayout.vue';
import Descripcion from './components/descripcion.vue';
import DatosPersonales from './components/datos_personales.vue';
import Titulos from './components/titulos.vue';
import Estudios from './components/estudios_actualizacion.vue';
import Publicaciones from './components/publicaciones.vue';
import NoDocente from './components/experienciaNoDocente.vue';
import ExDocente from './components/experienciaDocente.vue';
import ManejoSoftware from './components/manejoSoftware.vue';
import Idiomas from './components/idiomas.vue';
import Reconocimiento from './components/reconocimientos.vue';
import Proyeccion from './components/proyeccion.vue';
import Bonificacion from './components/bonificacion.vue';
import Inscripcion from './components/inscripcion.vue';
import Footer from './components/footer.vue';


</script>
