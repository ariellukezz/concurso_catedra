<template>
    <a-card class="mx-2 my-2 mt-2" >
    <div>
        <div class="flex justify-between border-b-2" style="border-bottom: solid 2px #009DD1; padding-bottom: 8px;">
            <div><span style="font-weight: bold; font-size: 1rem; color:#009DD1;">Datos personales </span></div>
            <div style="margin-top: -5px;"><a-button @click="modal = true">Agregar</a-button></div>
        </div>

        <div class="mt-3"  >
        <p style="text-align: justify;">
            <div v-if="form.id">
                <div>
                    <div><span class="font-bold">Tipo Doc</span><span class="mx-2">:</span><span>DNI</span></div>
                    <div><span class="font-bold">N° Documento</span><span class="mx-2">:</span>{{ form.nro_doc }}</div>
                    <div><span class="font-bold">Apellidos y nombres</span><span class="mx-2">:</span>{{ form.paterno }} {{ form.materno }} {{ form.nombres }} </div>
                    <div><span class="font-bold">Procedencia</span><span class="mx-2">:</span> Puno/Puno/Ilave </div>
                    <div><span class="font-bold">Dirección</span><span class="mx-2">:</span>{{ form.direccion }}</div>
                    <div><span class="font-bold">Sexo</span><span class="mx-2">:</span>{{ form.nro_doc == 1?"Femenino":"Masculino" }}</div>
                    <div><span class="font-bold">Fecha Nac.</span><span class="mx-2">:</span>{{ formatFechaNac(form.fec_nac) }}</div>
                </div>
                <div><span></span></div>
            </div>
            <!-- 
            <div>
                <table>
                    <tr><td><span class="font-bold">Tipo Doc</span></td><span class="mx-2">:</span><td></td><td>{{ form.nro_doc }}</td></tr>
                    <tr><td><span class="font-bold">N° Documento</span></td><span class="mx-2">:</span><td></td><td>{{ form.nro_doc }}</td></tr>
                    <tr><td><span class="font-bold">Ape. y nombres</span></td><span class="mx-2">:</span><td></td><td>{{ form.paterno }} {{ form.materno }} {{ form.nombres }} </td></tr>
                    <tr><td><span class="font-bold">Procedencia</span></td><span class="mx-2">:</span><td></td><td>{{ form.nro_doc }}</td></tr>
                    <tr><td><span class="font-bold">Dirección</span></td><span class="mx-2">:</span><td></td><td>{{ form.direccion }}</td></tr>
                    <tr><td><span class="font-bold">Sexo</span></td><span class="mx-2">:</span><td></td><td>{{ form.nro_doc == 1?"Femenino":"Masculino" }}</td></tr>
                    <tr><td><span class="font-bold">Fecha Nac.</span></td><span class="mx-2">:</span><td></td><td>{{ form.fec_nac }}</td></tr>
                </table>
                <div><span></span></div>
            </div> -->
            <!-- <pre>{{ form }}</pre> -->
            <a-popconfirm title="¿Seguro de eliminar？" ok-text="Si" cancel-text="No" @confirm="eliminar(descripcion.id)">
            <!-- <a-button text style="width: 20px; height: 20px; padding-left: 3px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
            </a-button> -->
            </a-popconfirm>
        </p>
        </div>
    </div>
    </a-card>



    <a-modal v-model:visible="modal" title="Datos personales" centered :footer="false"  :maskClosable="false" @ok="handleOk" @afterOpen="handleModalOpen">
    <div class="flex justify-center mt-6" style="">
        <div class="flex justify-center">
            <a-row style="display:flex; justify-content:center;">
                <a-col :span="24" class="">
                    <a-form
                        ref="formDatos"
                        name="form"
                        :model="form" 
                        :rules="formRules"
                    >
                    <a-row :gutter="16">
                        <a-col :xs="24" :sm="12" :md="8" :lg="12">
                            <div>
                                <label>Sexo</label>
                                <a-form-item
                                    name="sexo"
                                    :rules="[{ required: true, message: 'Seleccione sexo', trigger: 'change' },]">
                                    <div>
                                        <a-select
                                            v-model:value="form.sexo"
                                            style="">
                                            <a-select-option :value="1">Masculino</a-select-option>
                                            <a-select-option :value="2">Femenino</a-select-option>    
                                            <!-- <template #suffixIcon>
                                            <a-button type="primary" style="padding: 0px 3px; margin-right:-11px; border-radius: 0px 5px 5px 0px; background: gray;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                </a-button>
                                            </template> -->
                                        </a-select>
                                    </div>
                                </a-form-item>
                            </div>   
                        </a-col>           
                        

                        <a-col :xs="24" :sm="12" :md="8" :lg="12">
                            <label v-if="form.tipo_doc === 1">N° documento <span style="color:red;">*</span></label>
                            <label v-else>N° Carnet Ext.</label>
                            <a-form-item 
                                name="nro_doc" 
                                :rules="[{ required: true, message: 'Ingrese el N° de documento'},                                            
                                { min: 8, message: 'El dni debe tener 8 digitos', trigger: 'blur'}]"
                            >
                                <a-input
                                v-if="form.tipo_doc == 1"
                                v-model:value="form.nro_doc"
                                @input="dniInput"
                                :maxlength="8"
                                style="height: 32px;"
                                >
                                <template #suffix>
                                </template>
                                </a-input>
                            </a-form-item>
                        </a-col>
                        <a-col :xs="24" :sm="12" :md="12" :lg="12">
                            <label>Nombres<span style="color:red;">*</span></label>
                            <a-form-item name="nombres" :rules="[{ required: true, message: 'Ingrese los nombres' }]">
                            <a-input v-model:value="form.nombres" style="height: 32px;">
                                <template #suffix></template>
                                </a-input>
                            </a-form-item>
                        </a-col>

                        <a-col :xs="24" :sm="12" :md="12" :lg="12">
                            <label>Primer Apellido<span style="color:red;">*</span></label>
                            <a-form-item name="paterno" :rules="[{ required: true, message: 'Ingrese los nombres' }]">
                            <a-input v-model:value="form.paterno" style="height: 32px;">
                                <template #suffix>
                                </template>
                                </a-input>
                            </a-form-item>
                        </a-col>

                        <a-col :xs="24" :sm="12" :md="12" :lg="12">
                            <label>Segundo Apellido<span style="color:red;">*</span></label>
                            <a-form-item name="materno" :rules="[{ required: true, message: 'Ingrese segundo apellido' }]">
                            <a-input v-model:value="form.materno" style="height: 32px;">
                                <template #suffix>
                                </template>
                                </a-input>
                            </a-form-item>
                        </a-col>

                        <a-col :xs="24" :sm="12" :md="12" :lg="12">
                            <label>Fec. Nacimiento</label>
                            <a-form-item
                                name="fec_nac"
                                :rules="[ { required: true, message: 'Ingresa tu fecha de nacimiento', trigger: 'change'},
                                { validator: validateFechaNacimiento, trigger: 'change' }]"
                            >

                            <a-date-picker style="width:100%;" placeholder="Seleccionar fec. nacimiento" v-model:value="form.fec_nac" format="DD/MM/YYYY"/>
                            </a-form-item>
                        </a-col>

                        <a-col :xs="24" :sm="24" :md="12" :lg="24">
                            <label>Ubigeo (dep/prov/dist) {{ form.ubigeo_residencia }}<span style="color:red;">*</span></label>
                            <a-form-item name="ubigeo_residencia" :rules="[{ required: true, message: 'Este campo es obligatorio' }]">
                                <a-auto-complete
                                    v-model:value="form.ubigeo_residencia"                
                                    :options="residencias"
                                    @select="onSelectResidencias"
                                
                                >
                                    <a-input
                                        placeholder="Procedencia del Colegio"
                                        v-model:value="buscarColegio"
                                        @keypress="handleKeyPress"
                                    >
                                        <template #suffix>
                                            <a-tooltip title="Extra information">
                                            <down-outlined/>
                                            </a-tooltip>
                                        </template>
                                    </a-input>
                                </a-auto-complete>
                            </a-form-item>
                        </a-col>


                        <a-col :xs="24" :sm="12" :md="12" :lg="24">
                            <label>Dirección<span style="color:red;">*</span></label>
                            <a-form-item name="direccion" :rules="[{ required: true, message: 'Este campo es obligatorio' }]">
                            <a-input v-model:value="form.direccion" style="height: 32px;">
                                <template #suffix>
                                </template>
                                </a-input>
                            </a-form-item>
                        </a-col>


                        <a-col :xs="24" :sm="12" :md="8" :lg="8">
                            <label>celular<span style="color:red;">*</span></label>
                            <a-form-item name="celular" :rules="[{ required: true, message: 'Este campo es obligatorio' }]">
                            <a-input v-model:value="form.celular" style="height: 32px;">
                                <template #suffix>
                                </template>
                                </a-input>
                            </a-form-item>
                        </a-col>


                        <a-col :xs="24" :sm="12" :md="16" :lg="16">
                            <label>Correo<span style="color:red;">*</span></label>
                            <a-form-item name="correo" :rules="[{ required: true, message: 'Este campo es obligatorio' }]">
                            <a-input v-model:value="form.correo" style="height: 32px;">
                                <template #suffix>
                                </template>
                                </a-input>
                            </a-form-item>
                        </a-col>
                    </a-row>

                    <a-row>
                        <a-col :span="24">
                            <div class="flex justify-end">
                                <a-button class="mr-4" @click="Cancelar()"> Cancelar </a-button>                          
                                <a-button type="primary" style="width:90px; background:blue; color:white; border-radius:4px; border: none;" @click="save()">Guardar</a-button>
                            </div>
                        </a-col>
                        </a-row>
                    </a-form>
                </a-col>
            </a-row>
        </div>      

    </div>    
    </a-modal>
</template>            
<script setup>
// import Terminos from './formulario3.vue'
import { watch, computed, ref, reactive, onMounted } from 'vue';
import { DownOutlined } from '@ant-design/icons-vue';
import { notification } from 'ant-design-vue';
import axios from 'axios';
import dayjs from 'dayjs';
import 'dayjs/locale/es';
dayjs.locale('es');
const residencia = ref(null)
const redseleccionado = ref(null)
const buscarResidencia = ref(null)
const residencias = ref([])
const ubicolegio = ref(null)
const ubicolegioseleccionado = ref(null)
const buscarColegio = ref(null)
const ubicolegios = ref([])
const modalAviso = ref(false);
const modal = ref(false);
const buscarC = ref(null)
const colegios = ref([])
const formDatos = ref();
const loading = ref(false)
const loadingdowload = ref(false);
const pagos = ref([]);
const inscrito = ref(false);
const form = reactive({  
    id: null,
    tipo_doc: 1, 
    nro_doc:'',
    paterno:'',
    materno:'', 
    nombres:'', 
    sexo: null, 
    fec_nac:'',
    celular:'',
    correo:'',
    ubigeo_residencia:'',
    terminos:false
});
    
const dniInput = (event) => { form.nro_doc = event.target.value.replace(/\D/g, ''); };
const celularInput = (event) => { form.celular = event.target.value.replace(/\D/g, ''); };

const save = async () => {
    // loading.value = true;
    try {
        const values = await formDatos.value.validateFields();
        const response = await axios.post('/save-candidato', form);
        if (response.status === 202) {
            console.log(response.data.errors);
        } else {
            inscrito.value = true;
            getCandidato();
            limpiar();
            notificacion('success', response.data.titulo, response.data.mensaje);
        }
    } catch (error) {
        console.error(error);
    }
    // loading.value = false;
}

const getCandidato = async () => {
    const response = await axios.get('/get-candidato');
    if (response.data.estado == true) {
        if(response.data.datos.id){ form.id =  response.data.datos.id; }
        form.tipo_doc = response.data.datos.tipo_doc;
        form.nro_doc =  response.data.datos.nro_doc;
        form.celular =  response.data.datos.celular;
        form.paterno =  response.data.datos.paterno;
        form.materno =  response.data.datos.materno;
        form.nombres =  response.data.datos.nombres;
        form.sexo =  response.data.datos.sexo;
        if(response.data.datos.fec_nac){ form.fec_nac = dayjs(response.data.datos.fec_nac) }
        form.correo=  response.data.datos.correo;
        form.ubigeo_residencia =  response.data.datos.ubigeo_residencia;
        form.direccion =  response.data.datos.direccion;
        form.correo =  response.data.datos.correo;
        form.terminos =  true;
    }else{
        modalAviso.value = true;
    }
}

onMounted(() => {
    getCandidato();
})


watch(buscarC, ( newValue, oldValue ) => { getColegios() })
watch(buscarResidencia, ( newValue, oldValue ) => {  if(newValue.length >= 3){ getUbigeosResidencia() }})

const onSelectResidencias = (value, option) => { redseleccionado.value = option.key; form.ubigeo_residencia = option.key };


const notificacion = (type, titulo, mensaje) => { notification[type]({ message: titulo,description: mensaje});};

const getUbigeosResidencia = async () => {
    axios.post("/get-ubigeo",{"term": buscarResidencia.value})
    .then((response) => {
        residencias.value = response.data.datos.data;
        console.log('Datos recibidos:', residencias);
    })
    .catch((error) => {
        if (error.response) {
            console.error('Error de servidor:', error.response.data);
        } else if (error.request) {
            console.error('Error de red:', error.request);
            } else { console.error('Error de configuración:', error.message); }
    });
}




function validateFechaNacimiento(rule, value) {
    return new Promise((resolve, reject) => {
    if (!value) {
        reject(new Error(''));
    } else {
        const fechaNacimiento = new Date(value);
        const fechaMinima = new Date();
        const fechaMaxima = new Date();

        fechaMinima.setFullYear(fechaMinima.getFullYear() - 100);
        fechaMaxima.setFullYear(fechaMaxima.getFullYear() - 18);

        if (fechaNacimiento > fechaMaxima || fechaNacimiento < fechaMinima) {
        reject(new Error('Debes tener entre 18 y 100 años'));
        } else {
        resolve();
        }
    }
    });
}

const imprimir = async () => {
    loadingdowload.value = true;
    imp();
    await new Promise(resolve => setTimeout(resolve, 9000));
    loadingdowload.value = false;
}

const imp = () => {
    const pdfUrl = 'https://inscripciones.admision.unap.edu.pe/pdf-simulacro-inscripcion/' + form.nro_doc;
    const link = document.createElement('a');
    link.href = pdfUrl;
    link.target = '_blank';
    link.download = 'inscripcion-simulacro.pdf';
    link.click();
};

const limpiar = () => {
    form.tipo_doc = 1; 
    form.paterno ='';
    form.materno = ''; 
    form.nombres = ''; 
    form.sexo = null; 
    form.fec_nac = '';
    form.celular = '';
    form.correo = '';
    form.pais = 1;
    form.ubigeo_residencia = '';
    form.grado = 1; 
    form.ubigeo_colegio = null; 
    form.id_colegio = null; 
    form.terminos = false;
    form.id_pago = null;
    redseleccionado.valu = true
    residencia.value = null
    redseleccionado.value = null
    buscarResidencia.value = null
}  

const formatFechaNac = (date) => {
    dayjs.locale('es');
    return dayjs(date).format('DD MMMM YYYY');
}

</script>
<style scoped>

</style>