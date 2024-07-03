<template>
<a-card class="mx-2 my-2" >
<div>
    <div class="flex justify-between border-b-2" style="border-bottom: solid 2px #009DD1; padding-bottom: 8px;">
        <div><span style="font-weight: bold; font-size: 1rem; color:#009DD1;"> II. Estudios de posgrado y actualización </span></div>
        <div style="margin-top: -5px;"><a-button @click="abrirModal()">Agregar</a-button></div>
    </div>

    <div class="mt-3">
        <div class="mb-2" v-for="item in titulos" :key="item">
            <a-row :gutter="16">
                <a-col :xs="24" :sm="24" :md="24" :lg="24">
                    <div class="flex justify-between">
                        <div class="">
                            <div style="margin-bottom: 0px; margin-top: -2px;"><span class="font-bold" style="font-size: .9rem;"> {{ item.tipo_nombre }} </span></div>
                            <div class="ml-8 mb-1">
                                <div> <span class="" style="font-size:.9rem;"> {{ item.denominacion }}</span></div>
                                <div> {{ item.institucion }} </div>
                                <div class="text-start"> De {{ voltearFecha(item.fec_inicio) }} a {{ voltearFecha(item.fec_fin) }} </div>
                                <div v-if="item.semestres"class="italic"> <span class="font-bold" style="color: gray"> {{ item.semestres }} semestres </span> </div>
                            </div>
                        </div>
                        <div class="flex" style="margin-top: 0px;">
                            <a-button @click="abriPDf(item.url)" class="mr-2" style="width: 20px; height: 20px; padding-left: 3px; border: solid #1a2843 1px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                            </a-button>
                            <a-button @click="abrirEditar(item)" class="mr-2" style="width: 20px; height: 20px; padding-left: 3px; border: solid #1a2843 1px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#1a2843" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                            </a-button>
                            <a-button danger @click="eliminar(item.id)" style="width: 20px; height: 20px; padding-left: 3px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                            </a-button>
                        </div>
                    </div>
                </a-col>
            </a-row>            
        </div>
    </div>
</div>
</a-card>

<div class="">    
    <a-modal v-model:open="modaltitulo" width="1000px" title="Registro de estudios o actualizaciones" @ok="handleOk">
        <a-form
            ref="formDatos"
            name="form"
            :model="form" 
            :rules="formRules"
        >
            <a-row :gutter="16">
                <a-col :xs="24" :sm="24" :md="24" :lg="12">
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

                <a-col :xs="24" :sm="24" :md="24" :lg="12">
                    <label>Denominación<span style="color:red;">*</span></label>
                    <a-form-item name="denominacion" :rules="[{ required: true, message: 'Este campo es obligatorio' }]">
                        <a-input v-model:value="form.denominacion" style="height: 32px;">
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

                <a-col :xs="24" :sm="24" :md="24" :lg="12">
                    <label>Fec inicio<span style="color:red;">*</span></label>
                    <a-form-item name="fec_inicio" :rules="[{ required: true, message: 'Este campo es obligatorio' }]">
                        <a-date-picker v-model:value="form.fec_inicio" format="DD/MM/YYYY" style="width: 100%;"/>
                    </a-form-item>
                </a-col>

                <a-col :xs="24" :sm="24" :md="24" :lg="12">
                    <label>Fec fin<span style="color:red;">*</span></label>
                    <a-form-item name="fec_fin" :rules="[{ required: true, message: 'Este campo es obligatorio' }]">
                        <a-date-picker v-model:value="form.fec_fin" format="DD/MM/YYYY" style="width: 100%;"/>
                    </a-form-item>
                </a-col>

                <a-col v-if="form.tipo == 1 || form.tipo == 2 || form.tipo == 3 || form.tipo == 4" :xs="24" :sm="24" :md="24" :lg="24">
                    <label>Semestres<span style="color:red;"></span></label>
                    <a-form-item name="semestres">
                        <a-select
                            ref="select"
                            v-model:value="form.semestres"
                            style="width: 100%"
                            :options="listasemestres"
                            @focus="focus"
                            @change="selecionarSemestre"
                        />
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
                    @click="subirDatos"
                >
                    {{ loading ? 'Subiendo...' : 'Comenzar carga' }}
                </a-button>
            </div>
        </template>
    </a-modal>
    
    
    <a-modal v-model:open="modalPDF" title="Documento adjunto" style="min-width: 900px;">
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

</template>
        
<script setup>
import { ref, reactive } from 'vue';
import Layout from '@/Layouts/Formulario/FormularioLayout.vue';
import { Head } from '@inertiajs/vue3';
import { message, Upload, Button } from 'ant-design-vue';
import axios from 'axios';
const baseUrl = window.location.origin;
import { format, parse } from 'date-fns';
import dayjs from 'dayjs';
import 'dayjs/locale/es';
dayjs.locale('es');

const abrirModal = () => {
    modaltitulo.value = true;
}

const abrirEditar = (item) => {
    form.id = item.id;
    form.denominacion=  item.denominacion;
    form.institucion = item.institucion;
    if(item.fec_inicio){ form.fec_inicio = dayjs(item.fec_inicio) }
    if(item.fec_fin){ form.fec_fin = dayjs(item.fec_fin) }
    pdfUrl.value = baseUrl+'/'+item.url;
    form.semestres = item.semestres;
    form.tipo = item.id_tipo;
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
    tipo: null,
    denominacion: "",
    institucion: "",
    semestres:null,
    fec_inicio:null,
    fec_fin: null,
    fileList: null
});

const getTipos = async () => {
    let res = await axios.get("/get-tipo_estudio_actualizacion")
    if (res.data.estado == true) {
        tipos.value = res.data.datos;
    } else {
        console.log("Ocurrió un error");
    }
};

const selecionarTipo = value => { console.log(`selected ${value}`); };
const selecionarSemestre = value => {  console.log(`selected ${value}`);};

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

const getEstudios = async () => {
    const response = await axios.get('/get-estudios-usuario');
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

const subirDatos = async () => {
    const formData = new FormData();
    if(form.fileList[0]){ formData.append('file', form.fileList[0]);}
    if(form.id != null ){ formData.append('id', form.id)};
    formData.append('denominacion', form.denominacion);
    formData.append('semestres', form.semestres);
    formData.append('institucion', form.institucion);
    formData.append('fec_inicio',  format(new Date(form.fec_inicio), 'yyyy-MM-dd'));
    formData.append('fec_fin',  format(new Date(form.fec_fin), 'yyyy-MM-dd'));
    formData.append('tipo', form.tipo);
    formData.append('file', form.fileList[0]);
    try {
        loading.value = true;
        uploadProgress.value = 0;

        const response = await axios.post("subir-estudios-posgrado", formData, {
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
        form.value = null;
        message.success('¡Archivo PDF cargado exitosamente!');
        await getEstudios();
    } catch (error) {
        loading.value = false;
        message.error('Error al cargar el archivo.');
        console.error('File upload failed:', error);
    }
};

const voltearFecha = (fecha) => {
  var partes = fecha.split('-');
  var fechaVolteada = partes.reverse().join('/');  
  return fechaVolteada;
}

const eliminar = async (id) => {
    let res = await axios.get("/eliminar-estudio/"+id)
    if (res.data.estado == true) {
        getEstudios()
    } else {
        console.log("Ocurrió un error");
    }
};

const listasemestres = [
    { value:1, label:"1 semestre"},
    { value:2, label:"2 semestres"},
    { value:3, label:"3 semestres"},
    { value:4, label:"4 semestres"},
    { value:5, label:"5 semestres"},
    { value:6, label:"6 semestres"},
    { value:7, label:"7 semestres"},
    { value:8, label:"8 semestres"},
    { value:9, label:"9 semestres"},
    { value:10, label:"10 semestres"},
]

getEstudios();
getTipos()

</script>
