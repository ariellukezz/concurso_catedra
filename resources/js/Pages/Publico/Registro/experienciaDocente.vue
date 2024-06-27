<template>
<div class="p-4" style="height: calc(100vh - 63px);">
    <a-row :gutter="16">
        <a-col :xs="24" :sm="12" :md="8" :lg="12">    

            <div class="mb-2" v-for="titulo in titulos" :key="titulo">
                <a-card class="p-0">
                    <div class="flex justify-between" style="margin: -15px -10px;">
                        <div class="">
                            <div>
                                <span class="font-bold" style="font-size:1rem;">
                                    {{ titulo.institucion }}
                                </span>
                            </div>
                            <div>
                                    {{  titulo.cargo }}
                            </div>
                            <div>
                                del <span class="font-bold" style="font-size: .8rem;"> {{ titulo.fec_inicio }} </span>
                                al <span class="font-bold" style="font-size: .8rem;"> {{ titulo.fec_fin }} </span>
                            </div>
                            <div><span style="font-size: .8rem;"> Experiencia {{ titulo.descripcion }}</span></div>
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

    <a-modal class="lg:w-50" v-model:open="modaltitulo" title="Registro de investacion" @ok="handleOk">
        <a-form
            ref="formDatos"
            name="form"
            :model="form" 
            :rules="formRules"
        >
            <a-row :gutter="16">

                <a-col :xs="24" :sm="24" :md="24" :lg="24">
                    <label>Cargo<span style="color:red;">*</span></label>
                    <a-form-item name="cargo" :rules="[{ required: true, message: 'Este campo es obligatorio' }]">
                        <a-input v-model:value="form.cargo" style="height: 32px;">
                            <template #suffix>
                            </template>
                        </a-input>
                    </a-form-item>
                </a-col>

                <a-col :xs="24" :sm="24" :md="24" :lg="24">
                    <label>Institucion<span style="color:red;">*</span></label>
                    <a-form-item name="institucion" :rules="[{ required: true, message: 'Este campo es obligatorio' }]">
                        <a-input v-model:value="form.institucion" style="height: 32px;">
                            <template #suffix>
                            </template>
                        </a-input>
                    </a-form-item>
                </a-col>

                <a-col :xs="24" :sm="24" :md="12" :lg="12">
                    <label>Fec. inicio<span style="color:red;">* </span>(DD/MM/AAAA)</label>
                    <a-form-item name="fec_inicio" :rules="[{ required: true, message: 'Este campo es obligatorio' }]">
                        <a-date-picker style="width:100%;" placeholder="Seleccionar fec. publicación" v-model:value="form.fec_inicio" format="DD/MM/YYYY"/>
                    </a-form-item>
                </a-col>

                <a-col :xs="24" :sm="24" :md="12" :lg="12">
                    <label>Fec. fin<span style="color:red;">* </span>(DD/MM/AAAA)</label>
                    <a-form-item name="fec_fin"  :rules="[{ required: true, message: 'Este campo es obligatorio' }]">
                        <a-date-picker style="width:100%;" placeholder="Seleccionar fec. publicación" v-model:value="form.fec_fin" format="DD/MM/YYYY"/>
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
                <div v-if="pdfItem">
                    <iframe :src="baseUrl + '/' + pdfItem" width="100%" height="500px"></iframe>
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
</template>
    
<script setup>
import { ref, reactive, watch, computed } from 'vue';
import Layout from '@/Layouts/Formulario/FormularioLayout.vue';
import { Head } from '@inertiajs/vue3';
import { message } from 'ant-design-vue';
import axios from 'axios';
const baseUrl = window.location.origin;
import { format, parse } from 'date-fns';

const modaltitulo = ref(false);
const titulos = ref([]);
const tipos = ref([]);
const modalPDF = ref(false);
const pdfItem = ref(null);

const form = reactive({
    id: null,
    cargo: null,
    institucion: null,
    cargo: null,
    fec_inicio: null,
    fec_fin: null,
    fileList: []
});

const abrirModal = () => {
    form.id =  null;
    form.fileList = [];
    modaltitulo.value = true;
};

const abriPDf = (pdf) => {
    pdfItem.value = pdf;
    modalPDF.value = true;
};

const getTipos = async () => {
    try {
        const res = await axios.get("/get-tipo-investigacion-publicaicon");
        if (res.data.estado) {
            tipos.value = res.data.datos;
        } else {
            console.error("Ocurrió un error al obtener tipos.");
        }
    } catch (error) {
        console.error("Error en la solicitud de tipos:", error);
    }
};

const seleccionarTipo = (value) => {
    console.log(`Tipo seleccionado: ${value}`);
};

const eliminarTitulo = async (id) => {
    try {
        const res = await axios.get(`/eliminar-titulo/${id}`);
        if (res.data.estado) {
            await getTitulos();
        } else {
            console.error("No se pudo eliminar el título.");
        }
    } catch (error) {
        console.error("Error al eliminar el título:", error);
    }
};

const getTitulos = async () => {
    try {
        const response = await axios.get('/get-experiencia-docente');
        if (response.data.estado) {
            titulos.value = response.data.datos;
        } else {
            console.error("No se encontraron títulos.");
        }
    } catch (error) {
        console.error("Error en la solicitud de títulos:", error);
    }
};

const handleRemove = () => {
    pdfItem.value = null;
    form.fileList = [];
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

const cargarDatos = async () => {
    const formData = new FormData();
    formData.append('file', form.fileList[0]);
    formData.append('fec_inicio', format(new Date(form.fec_inicio), 'yyyy-MM-dd'));
    formData.append('fec_fin', format(new Date(form.fec_fin), 'yyyy-MM-dd'));
    formData.append('cargo', form.cargo);
    formData.append('institucion', form.institucion);

    try {
        loading.value = true;
        uploadProgress.value = 0;

        const response = await axios.post("subir-experiencia-docente", formData, {
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
        console.error('Error en la carga del archivo:', error);
    }
};

// const cambiarFormato = ( ) => {
//     const parsedDate = parse(form.fec_publicacion, 'EEE, dd LLL yyyy HH:mm:ss \'GMT\'', new Date());
//     form.fec_publicacion = format(parsedDate, 'yyyy-MM-dd');
//     return form.fec_publicacion;
// }

getTitulos();
getTipos();

</script>
