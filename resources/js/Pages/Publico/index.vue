<template>
<Layout>
<div>
  <div class="flex justify-center fondo-principal" style="align-items: center; height: calc(100vh - 112px);">
    <div class="">
      <div class="text-lg mt-2">
        <div class="fondo-principal-h1 mb-2">
            Sistema de concurso publico de catedra
        </div>
        <div class="fondo-principal-h1 mt-0">
          UNA PUNO 2024
        </div>
      </div>
      <div class="text-center mt-6">
        <div>
          <Link :href="route('cv')">
            <a-button style="background: #00a0c8; color:white; padding:0px 35px; height: 48px; font-size: 1.3rem;"> Inscribirme </a-button>
          </Link>
        </div>
      </div>
    </div>
  </div>


  <div class="flex bg-gray-200" style="align-items: center; height: calc(100vh - 112px);">

  </div>


</div>
</Layout>
</template>

<script setup>
import Layout from '@/Layouts/Formulario/FormularioLayout.vue';
import { Link } from '@inertiajs/vue3';
</script>

<style scoped>
.fondo-principal {
  width: 100%;
  height: 100vh;
  display: flex;
  font-family: 'Nunito';
  font-weight: 700;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  position: relative;
  text-align: center;
  color: #fff;
  padding: 20px;
  box-sizing: border-box;
  background: url('../../../assets/imagenes/una-puno-frontis.jpg') no-repeat center center;
  background-size: cover;
}

.fondo-principal::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #00a0c85f;
  z-index: 0;
}

.fondo-principal * {
  position: relative;
  z-index: 1;
}

.fondo-principal-h1 {
  font-size: 4rem;
  line-height: 4rem;
  margin-bottom: 20px;
}

.fondo-principal p {
  font-size: 1.5rem;
}

@media (max-width: 1000px) {
  .fondo-principal-h1 {
    font-size: 3rem;
    margin-bottom: 20px;
    line-height: 3.5rem;
  }

  .fondo-principal h1 {
    font-size: 1.4rem;
  }

  .fondo-principal p {
    font-size: 1rem;
  }
}

@media (max-width: 600px) {
  .fondo-principal-h1 {
    font-size: 2.5rem;
    margin-bottom: 5px;
  }

  .fondo-principal h1 {
    font-size: 2.4rem;
  }

  .fondo-principal p {
    font-size: 2rem;
  }
}

@media (max-width: 480px) {
  .fondo-principal-h1 {
    font-size: 1.7rem;
    line-height: 2.5rem;
    margin-bottom: 5px;
  }

  .fondo-principal h1 {
    font-size: 1.8rem;
  }

  .fondo-principal p {
    font-size: 2rem;
  }
}
</style>  