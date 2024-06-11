<template>
<Head title="Registo tiulos" />
<Layout>
    <div class="p-4" style="height: calc(100vh - 63px); background: #e3e3e3;">
        <a-row :gutter="16">
            <a-col :xs="24" :sm="12" :md="8" :lg="12">
                {{ value1 }}
                <div>
                    <a-select
                        ref="select"
                        v-model:value="value1"
                        style="width: 320px"
                        :options="tipos"
                        @focus="focus"
                        @change="selecionarTipo"
                        >
                    </a-select>
                </div>   
            </a-col> 
            <a-col :xs="24" :sm="12" :md="8" :lg="12">
                <pre>{{ tipos }}</pre>
            </a-col>
        </a-row>
    </div>
</Layout>
</template>

<script setup>
import { ref } from 'vue';
import Layout from '@/Layouts/Formulario/FormularioLayout.vue';
import { Head } from '@inertiajs/vue3';

const value1 =  ref("");

const tipos = ref([]);
const getTipos = async () => {
    let res  = await axios.get("/get-tipo-titulos")
    if(res.data.estado == true){
        tipos.value = res.data.datos;
    }else{
        console.log("Ocurrio un error");
    }
}
const selecionarTipo = value => {
  console.log(`selected ${value}`);
};
getTipos()
</script>