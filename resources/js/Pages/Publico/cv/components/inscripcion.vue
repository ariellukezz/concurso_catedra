<template>
    <a-card class="mx-2 my-2" >
    <div class="mb-4">
        <div class="flex justify-between border-b-2" style="border-bottom: solid 2px #009DD1; padding-bottom: 8px;">
            <div><span style="font-weight: bold; font-size: 1rem; color:#009DD1;"> Seleccion de plaza </span></div>
        </div>

        <div class="flex justify-between mt-6" style="align-items: center; height: 40px;">
            <h1 class="font-bold text-md">Plaza seleccionada</h1>
            <div style="margin-top: 0px;" class="mr-1"><a-button @click="abrirModal()">Seleccionar plaza</a-button></div>
        </div>
        <div class="mt-5 mx-2 my-2">

            <div class="mb-5" v-for="titulo in inscripciones" :key="titulo">    
                <div class="flex justify-between" style="margin: -5px -10px;">
                    <div class="">
                        <div><span class="font-bold"> {{ titulo.escuela }} </span></div>
                        <div class="italic flex"> 
                            ( 
                                <div> <span class="italic" style="font-size:.9rem;">contrato {{  titulo.contrato1 }} </span>
                                </div>
                                <div> <span class="italic" style="font-size:.9rem;">, contrato {{  titulo.contrato2 }} </span>
                                </div>           
                            )                
                        </div>
                    </div>
                    <div class="flex" style="margin-top: 0px;">
                        <a-button @click="abriPDf(titulo.url)" class="mr-2" style="width: 20px; height: 20px; padding-left: 3px; border: solid #1a2843 1px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                        </a-button>
                        <a-button @click="abriPDf(titulo.url)" class="mr-2" style="width: 20px; height: 20px; padding-left: 3px; border: solid #1a2843 1px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#1a2843" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                        </a-button>
                        <a-button danger @click="eliminar(titulo.id)" style="width: 20px; height: 20px; padding-left: 3px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                        </a-button>
                    </div>
                </div>
            
            </div>
        </div>

    </div>

    <a-table 
        :columns="columnas" 
        :data-source="form.plazas"
        :key="id"
        size="small"
        :pagination="false"
        style="scale: .7rem;"
        > 
            <template #bodyCell="{ column, index, record }">        
                <template v-if="column.dataIndex === 'cursos'">
                    <div v-if="record.cursos">
                        <div v-for="(curso, index) in record.cursos.split(',')" :key="index">
                            <ul>
                                <li>{{ curso.trim() }}</li>
                            </ul>
                        </div>
                    </div>                                            
                </template>

                <template v-if="column.dataIndex === 'opcion'">
                    <div class="flex" style="justify-content: center;">
                        <a-tag color="green">Seleccionado</a-tag>
                    </div>
                </template>
    
            </template>
    </a-table>


    <div class="flex justify-between" style="align-items: center; height: 40px;">
            <h1 class="font-bold">Plaza adicional seleccionadas</h1>
            <div style="margin-top: 0px;" class="mr-1"><a-button @click="abrirModal2()">Seleccionar plaza </a-button></div>
    </div>

    <a-table 
        v-if="plazas_seleccionadas2 != null || plazas_seleccionadas2 == []"
        :columns="columnas" 
        :data-source="plazas_seleccionadas2"    
        :key="id"
        size="small"
        :pagination="false"
        style="scale: .7rem;"
        > 
        <template #bodyCell="{ column, index, record }">        
            <template v-if="column.dataIndex === 'cursos'">
                <div v-if="record.cursos">
                    <div v-for="(curso, index) in record.cursos.split(',')" :key="index">
                        <ul>
                            <li>{{ curso.trim() }}</li>
                        </ul>
                    </div>
                </div>                                            
            </template>

            <template v-if="column.dataIndex === 'opcion'">
                <div class="flex" style="justify-content: center;">
                    <a-tag color="green">Seleccionado</a-tag>
                </div>
            </template>

        </template>
    </a-table>


    <div class="mt-6">
        <div class="flex justify-end" v-if="plazas_seleccionadas">
            <a-button 
                @click="save()"
                style="background: #009DD1; color: white; height: 42px;" 
                :disabled="plazas_seleccionadas.length === 0"
            >
                FINALIZAR INSCRIPCIÓN
            </a-button>
        </div>
    </div>

    </a-card>
    <div class="px-4">
        <a-modal v-model:open="modaltitulo" :footer="false" width="680px" title="Seleccion de plaza">
            <a-form
                ref="formDatos"
                name="form"
                :model="form" 
                :rules="formRules"
            >
                <a-row :gutter="16">
                    <a-col :xs="24" :sm="24" :md="24" :lg="24">
                        <label>Programa<span style="color:red;">*</span></label>
                        <a-form-item name="programa" :rules="[{ required: true, message: 'Este campo es obligatorio' }]">
                            
                            <a-select
                                ref="select"
                                v-model:value="form.programa"
                                style="width: 100%"
                                :options="programas"
                                @focus="focus"
                                @change="selecionarPrograma"
                            >
                            </a-select>
                        </a-form-item>
                    </a-col>

                    <a-col :xs="24" :sm="24" :md="24" :lg="24">
                        <a-table 
                            :columns="columnas" 
                            :data-source="plazas"
                            :key="id"
                            size="small"
                            :pagination="false"
                            style="scale: .7rem;"
                            > 
                                <template #bodyCell="{ column, index, record }">        
                                    <template v-if="column.dataIndex === 'cursos'">
                                        <div v-if="record.cursos">
                                            <div v-for="(curso, index) in record.cursos.split(',')" :key="index">
                                                <ul>
                                                    <li>{{ curso.trim() }}</li>
                                                </ul>
                                            </div>
                                        </div>                                            
                                    </template>

                                    <template v-if="column.dataIndex === 'opcion'">
                                        <div class="flex" style="justify-content: center;">
                                            <a-button @click="seleccionar1(record)">Seleccionar</a-button>
                                        </div>
                                    </template>
                        
                                </template>
                        </a-table>
                    </a-col>

                </a-row>
            </a-form>
        </a-modal>


        <a-modal v-model:open="modaltitulo2" :footer="false" width="680px" title="Seleccion de plaza adicional">

            <a-form
                ref="formDatos"
                name="form"
                :model="form" 
                :rules="formRules"
            >
                <a-row :gutter="16">
                    <a-col :xs="24" :sm="24" :md="24" :lg="24">
                        <label>Programa<span style="color:red;">*</span></label>
                        <a-form-item name="programa" :rules="[{ required: true, message: 'Este campo es obligatorio' }]">
                            
                            <a-select
                                ref="select"
                                v-model:value="form.programa"
                                style="width: 100%"
                                :options="programas"
                                @focus="focus"
                                @change="selecionarPrograma"
                                :disabled="modaltitulo2 == true"
                            >
                            </a-select>
                        </a-form-item>
                    </a-col>

                    <a-col :xs="24" :sm="24" :md="24" :lg="24">
                        <a-table 
                            :columns="columnas" 
                            :data-source="plazas"
                            :key="id"
                            size="small"
                            :pagination="false"
                            style="scale: .7rem;"
                            > 
                                <template #bodyCell="{ column, index, record }">        
                                    <template v-if="column.dataIndex === 'cursos'">
                                        <div v-if="record.cursos">
                                            <div v-for="(curso, index) in record.cursos.split(',')" :key="index">
                                                <ul>
                                                    <li>{{ curso.trim() }}</li>
                                                </ul>
                                            </div>
                                        </div>                                            
                                    </template>

                                    <template v-if="column.dataIndex === 'opcion'">
                                        <div class="flex" style="justify-content: center;">
                                            <a-button @click="seleccionar2(record)">Seleccionar</a-button>
                                        </div>
                                    </template>
                        
                                </template>
                        </a-table>


                    </a-col>

                </a-row>
            </a-form>
        </a-modal>
    </div>


    
</template>
        
<script setup>
import { ref, reactive, watch } from 'vue';
import { message, notification } from 'ant-design-vue';
import axios from 'axios';
const baseUrl = window.location.origin;
import { format, parse } from 'date-fns';

const modaltitulo = ref(false);
const modaltitulo2 = ref(false);
const inscripciones = ref([]);
const plazas_seleccionadas = ref([]);
const plazas_seleccionadas2 = ref([]);

const pdfItem = ref(null);

const form = reactive({
    id: null,
    programa: null,
    plazas: [],
});

const abrirModal = () => {
    modaltitulo.value = true;
};

const abrirModal2 = () => {
    modaltitulo2.value = true;
};

const seleccionarPrograma = (value) => {
    console.log(`Tipo seleccionado: ${value}`);
};

// const eliminar = async (id) => {
//     try {
//         const res = await axios.get(`/eliminar-bonificacion/${id}`);
//         if (res.data.estado) {
//             await getInscripciones();
//         } else {
//             console.error("No se pudo eliminar el título.");
//         }
//     } catch (error) {
//         console.error("Error al eliminar el título:", error);
//     }
// };

const getInscripciones = async () => {
    try {
        const response = await axios.get('/get-inscripciones');
        if (response.data.datos) {
            form.plazas = response.data.datos.P1;
            plazas_seleccionadas2.value = response.data.datos.P2;
            // form.programa = response.data.datos.id_escuela;
        } else {
            console.error("No se encontraron inscripciones.");
        }
    } catch (error) {
        console.error("Error en la solicitud de títulos:", error);
    }
};


const plazas = ref([]);

const getPlazas = async () => {
    try {
        const response = await axios.get('/get-plazas/'+form.programa);
        if (response.data.estado) {  plazas.value = response.data.datos; }
    } catch (error) {
        console.error("Error en la solicitud de títulos:", error);
    }
};

const seleccionar1 = async (item) => {
  if (!plazas_seleccionadas.value.includes(item.id)) {
    if (form.plazas.length > 0) {
      form.plazas.splice(0, 1, item);
      plazas_seleccionadas.value.splice(0, 1, item.id);
      plazas_seleccionadas2.value = [];
    } else {
      form.plazas.push(item);
      plazas_seleccionadas.value.push(item.id);
    }
  }
  modaltitulo.value = false;
};

const seleccionar2 = async (item) => {
    const result = plazas_seleccionadas.value.includes(item.id);

    if (result) {
        message.error('Error - ¡Debe seleccionar una plaza Diferente!');        
    } else {
        if( plazas_seleccionadas.value.length > 0){
            if (!plazas_seleccionadas2.value.includes(item.id)) {
                if (plazas_seleccionadas2.value.length > 0) {
                    plazas_seleccionadas2.value.splice(0, 1, item);
                } else {
                    plazas_seleccionadas2.value.push(item);
                }
            }
            modaltitulo2.value = false;
        }else{
            message.error('Error - ¡Debe tener elejida una Plaza, para elegir una plaza Adicional!');
        }        
    }


};


const loading = ref(false);
const uploadProgress = ref(0);

const save = async () => {
    const formData = new FormData();
    formData.append('programa', form.programa);
    formData.append('plaza', plazas_seleccionadas.value);
    if (plazas_seleccionadas2.value[0]) {
        formData.append('plaza_adicional', plazas_seleccionadas2.value[0].id);
    }

    try {
        loading.value = true;
        uploadProgress.value = 0;
        const response = await axios.post("save-inscripcion", formData, {
            headers: {
                'Content-Type': 'multipart/form-data',
                Authorization: 'Bearer your-auth-token',
            }
        });
        modaltitulo.value = false;
        loading.value = false;
        message.success('¡Participante inscrito!');
        await getInscripciones();
    } catch (error) {
        loading.value = false;
        console.error('Error al registrar inscripción:', error);
    }
};

watch(() => form.programa, (newVal, oldVal) => {
    getPlazas();
});

const programas = ref([
    { value: 1, label: "INGENIERIA AGRONOMICA" },
    { value: 2, label: "INGENIERIA AGROINDUSTRIAL" },
    { value: 3, label: "INGENIERIA TOPOGRAFICA Y AGRIMENSURA" },
    { value: 4, label: "MEDICINA VETERINARIA Y ZOOTECNIA" },
    { value: 5, label: "INGENIERIA ECONOMICA" },
    { value: 6, label: "CIENCIAS CONTABLES" },
    { value: 7, label: "ADMINISTRACION" },
    { value: 8, label: "TRABAJO SOCIAL" },
    { value: 9, label: "ENFERMERIA" },
    { value: 10, label: "INGENIERIA DE MINAS" },
    { value: 11, label: "HUMANIDADES" },
    { value: 12, label: "SOCIOLOGIA" },
    { value: 13, label: "TURISMO" },
    { value: 14, label: "ANTROPOLOGIA" },
    { value: 15, label: "CIENCIAS DE LA COMUNICACION SOCIAL" },
    { value: 16, label: "ARTE" },
    { value: 17, label: "BIOLOGIA" },
    { value: 18, label: "EDUCACION SECUNDARIA" },
    { value: 19, label: "EDUCACION PRIMARIA" },
    { value: 20, label: "EDUCACION INICIAL" },
    { value: 21, label: "EDUCACION FISICA" },
    { value: 22, label: "INGENIERIA ESTADISTICA E INFORMATICA" },
    { value: 23, label: "DERECHO" },
    { value: 24, label: "INGENIERIA QUIMICA" },
    { value: 25, label: "ODONTOLOGIA" },
    { value: 26, label: "NUTRICION HUMANA" },
    { value: 27, label: "INGENIERIA GEOLOGICA" },
    { value: 28, label: "INGENIERIA METALURGICA" },
    { value: 29, label: "INGENIERIA CIVIL" },
    { value: 30, label: "ARQUITECTURA Y URBANISMO" },
    { value: 31, label: "CIENCIAS FISICO MATEMATICAS" },
    { value: 32, label: "INGENIERIA AGRICOLA" },
    { value: 33, label: "MEDICINA HUMANA" },
    { value: 34, label: "INGENIERIA MECANICA ELECTRICA" },
    { value: 35, label: "INGENIERIA ELECTRONICA" },
    { value: 36, label: "INGENIERIA DE SISTEMAS" }
]);

const columnas = [
  { title: 'PD', dataIndex: 'pd', },
  { title: 'Tipo contrato', dataIndex: 'tipo_contrato',},
  { title: 'Cursos', dataIndex: 'cursos', },
  { title: 'Tipo plaza', dataIndex: 'tipo_plaza', },
  { title: '', dataIndex: 'opcion', },
];

getInscripciones();

</script>
    