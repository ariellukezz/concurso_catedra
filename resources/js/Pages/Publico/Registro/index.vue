<template>
<Head title="Registo" />
<Layout>
    <div style="height: calc(100vh - 63px);">
        <div class="bg-gray-50 overflow-hidden shadow-sm sm:rounded-lg">
            <a-row>
                <a-col class="flex p-4" :xs="24" :sm="24" :md="24" :lg="12">
                    <div>
                        <Datospersonales/>
                    </div>
                </a-col>
                <a-col :xs="24" :sm="24" :md="24" :lg="12">
                    <div class="hidden sm:hidden md:block lg:block xl:block">
                        <VistaPrevia/>
                    </div>
                </a-col>

            </a-row>
        </div>
    </div>
</Layout>
</template>

<script setup>
import Layout from '@/Layouts/Formulario/FormularioLayout.vue';
import Datospersonales from './components/Datos_personales.vue';
import VistaPrevia from './components/VistaPrevia.vue';
import { Head } from '@inertiajs/vue3';
</script>