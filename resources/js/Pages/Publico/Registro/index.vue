<template>
<Head title="Registo" />
<Layout>
    <div style="height: calc(100vh - 63px);">
        <div>
            <div class="mb-2"> 
                <div> <span style="font-size: 1.4rem; font-weight: 500; font-family:'Times New Roman', Times, serif"> Registro de datos personales </span></div>
                <div style="margin-top: -6px;">Paso 1 de 5</div>
            </div>
        </div>
        <div class="bg-gray-50 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 border-b border-gray-200">
                <Datospersonales/>
            </div>
        </div>
    </div>
</Layout>
</template>

<script setup>
import Layout from '@/Layouts/Formulario/FormularioLayout.vue';
import Datospersonales from './components/Datos_personales.vue';
import { Head } from '@inertiajs/vue3';
</script>