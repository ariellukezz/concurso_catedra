<template>
    <div>
        <div class="mb-6"> 
            <div> <span style="font-size: 1.4rem; font-weight: 500; font-family:'Times New Roman', Times, serif"> Registro de datos personales </span></div>
            <div style="margin-top: -6px;">Paso 1 de 5</div>
        </div>
    </div>
    <div class="flex justify-center" style="">
        <div class="flex justify-center">
            <a-row style="display:flex; justify-content:center;">
                <a-col :span="24" class="">
                    <a-form
                        ref="formDatos"
                        name="form"
                        :model="form" 
                        :rules="formRules"
                    >
                    <a-row>
                        <div style="margin-top: -10px; width: 100%; display: flex; justify-content: center">
                            <!-- <Foto/> -->
                        </div>  
                    </a-row>
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
                            <a-input v-model:value="form.nombres" :disabled="!form.terminos" style="height: 32px;">
                                <template #suffix></template>
                                </a-input>
                            </a-form-item>
                        </a-col>

                        <a-col :xs="24" :sm="12" :md="12" :lg="12">
                            <label>Primer Apellido<span style="color:red;">*</span></label>
                            <a-form-item name="paterno" :rules="[{ required: true, message: 'Ingrese los nombres' }]">
                            <a-input v-model:value="form.paterno" :disabled="!form.terminos" style="height: 32px;">
                                <template #suffix>
                                </template>
                                </a-input>
                            </a-form-item>
                        </a-col>

                        <a-col :xs="24" :sm="12" :md="12" :lg="12">
                            <label>Segundo Apellido<span style="color:red;">*</span></label>
                            <a-form-item name="materno" :rules="[{ required: true, message: 'Ingrese segundo apellido' }]">
                            <a-input v-model:value="form.materno" :disabled="!form.terminos" style="height: 32px;">
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

                            <a-date-picker style="width:100%;" placeholder="Seleccionar fec. nacimiento" v-model:value="form.fec_nac" format="DD/MM/YYYY" :disabled="!form.terminos"/>
                            </a-form-item>
                        </a-col>

                        <a-col :xs="24" :sm="24" :md="12" :lg="24">
                            <label>Ubigeo (dep/prov/dist) {{ form.ubigeo_residencia }}<span style="color:red;">*</span></label>
                            <a-form-item name="ubigeo_residencia" :rules="[{ required: true, message: 'Este campo es obligatorio' }]">
                                <a-auto-complete
                                    v-model:value="form.ubigeo_residencia"                
                                    :options="residencias"
                                    @select="onSelectResidencias"
                                    :disabled="!form.terminos"
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
                            <a-input v-model:value="form.direccion" :disabled="!form.terminos" style="height: 32px;">
                                <template #suffix>
                                </template>
                                </a-input>
                            </a-form-item>
                        </a-col>


                        <a-col :xs="24" :sm="12" :md="8" :lg="8">
                            <label>celular<span style="color:red;">*</span></label>
                            <a-form-item name="celular" :rules="[{ required: true, message: 'Este campo es obligatorio' }]">
                            <a-input v-model:value="form.celular" :disabled="!form.terminos" style="height: 32px;">
                                <template #suffix>
                                </template>
                                </a-input>
                            </a-form-item>
                        </a-col>


                        <a-col :xs="24" :sm="12" :md="16" :lg="16">
                            <label>Correo<span style="color:red;">*</span></label>
                            <a-form-item name="correo" :rules="[{ required: true, message: 'Este campo es obligatorio' }]">
                            <a-input v-model:value="form.correo" :disabled="!form.terminos" style="height: 32px;">
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
                                <a-button type="primary" style="width:90px; background:#340691; border-radius:4px; border: none;" @click="save()" :disabled="!form.terminos">Guardar</a-button>
                            </div>
                        </a-col>
                        </a-row>
                    </a-form>
                </a-col>
            </a-row>
        </div>      

    </div>    
    
    <a-modal v-model:visible="modalAviso" :closable="false" :maskClosable="false" @ok="handleOk" @afterOpen="handleModalOpen">
        <div class="mb-3"> <span style="font-size:1.2rem; font-weight:bold;">Aviso importante</span> </div>
        <div  style="text-align: justify"> 
            <Terminos :parentData="childData" @update-parent-data="handleUpdate" /> 
        </div>
        <template #footer>
            <a-button key="back" @click="cancelar()">No Acepto</a-button>
            <a-button v-if="childData === false" type="primary" style="width:100px;" :loading="loading" @click="aceptarT" disabled>Acepto</a-button>
            <a-button v-else type="primary" :loading="loading" style="width:100px; background:#340691; border-radius:4px; border: none;" @click="aceptarT">Acepto</a-button>
        </template>
    
    </a-modal>

</template>
            
<script setup>
import Terminos from './formulario3.vue'
import Foto from './foto.vue'
import { watch, computed, ref, reactive, onMounted } from 'vue';
import { DownOutlined } from '@ant-design/icons-vue';
import { notification } from 'ant-design-vue';
import { Head } from '@inertiajs/vue3';
const baseUrl = window.location.origin;
import axios from 'axios';
import dayjs from 'dayjs';
const residencia = ref(null)
const redseleccionado = ref(null)
const buscarResidencia = ref(null)
const residencias = ref([])
const ubicolegio = ref(null)
const ubicolegioseleccionado = ref(null)
const buscarColegio = ref(null)
const ubicolegios = ref([])
const modalAviso = ref(false);
const colegio = ref(null)
const colegioseleccionado = ref(null)
const buscarC = ref(null)
const colegios = ref([])
const confirmarcion = ref(false)
const activeKey = ref("1")
const formDatos = ref();
const loading = ref(false)
const loadingdowload = ref(false);
const pagos = ref([]);
const inscrito = ref(false);
const pagado = ref(false);
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
watch(() => form.nro_doc, (newValue, oldValue) => { 
    if(newValue.length == 8){ 
        getInscrito();
    } 
});

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

const getUbigeosColegio = async () => {
    axios.post("/get-ubigeo",{"term": buscarColegio.value})
    .then((response) => {
        ubicolegios.value = response.data.datos.data;
    })
    .catch((error) => {
        if (error.response) {
            console.error('Error de servidor:', error.response.data);
        } else if (error.request) {
            console.error('Error de red:', error.request);
            } else { console.error('Error de configuración:', error.message); }
    });
}



const getInscrito = async () => {
    axios.get("/get-inscrito-simulacro/"+form.nro_doc)
    .then((response) => {
        inscrito.value = response.data.estado;
    })
    .catch((error) => {
        if (error.response) {
            console.error('Error de servidor:', error.response.data);
        } else if (error.request) {
            console.error('Error de red:', error.request);
        } else { console.error('Error de configuración:', error.message); }
    });
}

const getColegios = async () => {
    axios.post("/get-colegios-ubigeo",{"term": buscarC.value, ubigeo: ubicolegioseleccionado.value })
    .then((response) => {
        colegios.value = response.data.datos.data;
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

const cancelar = () => { modalAviso.value = false, childData.value = false; }
const aceptarT = () => { form.terminos = true; modalAviso.value = false; }
const childData = ref(false);

const handleUpdate = (newData) => {
    childData.value = newData;
};


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

const estadoPago = ref(null);

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


const toggleSelection = (item) => {
    item.selected = !item.selected;
};

const selectedItems = computed(() => {
    if(pagos.value){
        return pagos.value.filter((item) => item.selected);
    }

});

getUbigeosResidencia()
getUbigeosColegio()

</script>
<style scoped>

</style>