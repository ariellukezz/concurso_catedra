<template>
<Head title="Registro de títulos" />
<Layout>
    <div class="p-4" style="height: calc(100vh - 63px);">
        <a-row :gutter="16">
            <a-col :xs="24" :sm="12" :md="8" :lg="12">    

                <div class="mb-2" v-for="titulo in titulos" :key="titulo">
                    <a-card class="p-0">
                        <div class="flex justify-between" style="margin: -15px -10px;">
                            <div class="">
                                <div>
                                    <span class="font-bold" style="font-size:1.1rem;">
                                        {{  titulo.denominacion }}
                                    </span>
                                </div>
                                <div>
                                    {{ titulo.tipo_nombre }}
                                </div>
                            </div>
                            <div class="flex" style="margin-top: 0px;">
                                <a-button @click="abriPDf(titulo.url)" class="mr-2" style="width: 20px; height: 20px; padding-left: 3px; border: solid #1a2843 1px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#1a2843" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                </a-button>
                                <a-button danger @click="eliminarTitulo(titulo.id)" style="width: 20px; height: 20px; padding-left: 3px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                </a-button>
                            </div>
                        </div>
                        
                        <!-- {{  titulo }} -->
                    </a-card>
                </div>
                <div>
                    <a-card class="p-0" @click="abrirModal()" style="margin-top: 0px; border: dotted 1px black; background: none; cursor: pointer;">
                        <div class="flex justify-between" style="margin: -15px -10px;">
                            <div class="">
                                <div>
                                    <span class="font-regular" style="font-size:1rem;">
                                        Registrar nuevo
                                    </span>
                                </div>
                                <div>
                                    <!-- {{ titulo.tipo_nombre }} -->
                                </div>
                            </div>
                            <div class="flex" style="margin-top: 0px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-square"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                            </div>
                        </div>
                        
                        <!-- {{  titulo }} -->
                    </a-card>
                </div>
            </a-col> 
            <a-col :xs="24" :sm="12" :md="8" :lg="12">

            </a-col>
        </a-row>

        <a-modal v-model:open="modaltitulo" title="Registro de título" @ok="handleOk">
            <a-form
                ref="formDatos"
                name="form"
                :model="form" 
                :rules="formRules"
            >
                <a-row :gutter="16">
                    <a-col :xs="24" :sm="24" :md="24" :lg="24">
                        <label>Denominación<span style="color:red;">*</span></label>
                        <a-form-item name="descripcion" :rules="[{ required: true, message: 'Este campo es obligatorio' }]">
                            <a-input v-model:value="form.descripcion" style="height: 32px;">
                                <template #suffix>
                                </template>
                            </a-input>
                        </a-form-item>
                    </a-col>

                    <a-col :xs="24" :sm="24" :md="24" :lg="24">
                        <label>Tipo<span style="color:red;">*</span></label>
                        <a-form-item name="tipo" :rules="[{ required: true, message: 'Este campo es obligatorio' }]">
                            <a-select
                                ref="select"
                                v-model:value="form.tipo"
                                style="width: 100%"
                                :options="tipos"
                                @focus="focus"
                                @change="selecionarTipo"
                            >
                            </a-select>
                        </a-form-item>
                    </a-col>

                    <a-col :xs="24" :sm="24" :md="24" :lg="24">
                        <label>Archivo PDF (Max. 2mb)<span style="color:red;">*</span></label>
                        <a-form-item name="fileList" :rules="[{ required: true, message: 'Este campo es obligatorio' }]">
                            <a-upload :file-list="form.fileList" :before-upload="beforeUpload" @remove="handleRemove">
                                <a-button>
                                    <upload-outlined></upload-outlined>
                                    Seleccionar archivo PDF
                                </a-button>
                            </a-upload>
                            <div class="mt-2" v-if="pdfUrl">
                                <iframe :src="pdfUrl" width="100%" height="300px"></iframe>
                            </div>
                        </a-form-item>
                    </a-col>
                </a-row>
            </a-form>
            <template #footer>
                <div class="flex justify-end">
                    <a-button
                        type="primary"
                        :disabled="!pdfUrl"
                        :loading="loading"
                        style="margin-top: 16px"
                        @click="cargarDatos"
                    >
                        {{ loading ? 'Subiendo...' : 'Comenzar carga' }}
                    </a-button>
                </div>
            </template>
        </a-modal>


        <a-modal v-model:open="modalPDF" title="Registro de título" style="min-width: 900px;">
            <a-row :gutter="16">
                <a-col :xs="24" :sm="24" :md="24" :lg="24">
                    <div class="mt-2" v-if="pdfItem">
                        <iframe :src="baseUrl+'/'+pdfItem" width="100%" height="500px"></iframe>
                    </div>
                </a-col>
            </a-row>
            <template #footer>
                <div class="flex justify-end">
                    <a-button @click="modalPDF == false">
                        Aceptar
                    </a-button>
                </div>
                </template>
        </a-modal>
    </div>
</Layout>
</template>
    
<script setup>
import { ref, reactive } from 'vue';
import Layout from '@/Layouts/Formulario/FormularioLayout.vue';
import { Head } from '@inertiajs/vue3';
import { message, Upload, Button } from 'ant-design-vue';
import axios from 'axios';
const baseUrl = window.location.origin;

const abrirModal = () => {
    form.id =  null;
    form.descripcion = "";
    form.tipo =  null;
    form.fileList = [];
    modaltitulo.value = true;

}
const modaltitulo = ref(false);
const titulos = ref([]);
const tipos = ref([]);
const modalPDF = ref(false);
const pdfItem = ref(null);

const abriPDf = (pdf) => {
    pdfItem.value = pdf;
    modalPDF.value = true;
}

const formDatos = ref();
const form = reactive({  
    id: null,
    descripcion: "", 
    tipo: null,
    fileList: []
});


const getTipos = async () => {
    let res = await axios.get("/get-tipo-titulos")
    if (res.data.estado == true) {
        tipos.value = res.data.datos;
    } else {
        console.log("Ocurrió un error");
    }
};
const selecionarTipo = value => {
    console.log(`selected ${value}`);
};

const eliminarTitulo = async (id) => {
    let res = await axios.get("/eliminar-titulo/"+id)
    if (res.data.estado == true) {
        getTitulos()
    } else {
        console.log("Ocurrió un error");
    }
};

const loading = ref(false);
const pdfUrl = ref(null);
const uploadProgress = ref(0);

const beforeUpload = (file) => {
    if (file.type === 'application/pdf') {
        const reader = new FileReader();
        reader.onload = (e) => {
            pdfUrl.value = e.target.result;
        };
        reader.readAsDataURL(file);
        form.fileList = [file];
    } else {
        message.error('¡Solo puedes cargar archivos PDF!');
    }
    return false;
};

const getTitulos = async () => {
    const response = await axios.get('/get-titulos-usuario');
    if (response.data.estado == true){
        titulos.value = response.data.datos;
    }else{
        console.log("No se encontraron datos");
    }
}

const handleRemove = () => {
    pdfUrl.value = null;
    form.fileList = [];
};

const cargarDatos = async () => {
    const formData = new FormData();
    formData.append('file', form.fileList[0]);
    formData.append('descripcion', form.descripcion);
    formData.append('tipo', form.tipo);

    try {
        loading.value = true;
        uploadProgress.value = 0;

        const response = await axios.post("cargar-titulos", formData, {
            headers: {
                'Content-Type': 'multipart/form-data',
                Authorization: 'Bearer your-auth-token',
            },
            onUploadProgress: progressEvent => {
                uploadProgress.value = Math.round((progressEvent.loaded * 100) / progressEvent.total);
            }
        });
        modaltitulo.value = false;
        loading.value = false;
        message.success('¡Archivo PDF cargado exitosamente!');
        await getTitulos();
    } catch (error) {
        loading.value = false;
        message.error('Error al cargar el archivo.');
        console.error('File upload failed:', error);
    }
};

getTitulos();
getTipos()

</script>

<style scoped>
/* Estilos opcionales */
</style>