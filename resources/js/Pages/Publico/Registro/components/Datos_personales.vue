<template>
    <div class="flex justify-center" style="">
        <div class="flex justify-center">
            <a-row style="display:flex; justify-content:center;">
                <a-col :span="24">
                    <a-form
                        ref="formDatos"
                        name="form"
                        :model="form" 
                        :rules="formRules"
                    >
                    <a-row>
                        <div style="margin-top: -10px; width: 100%; display: flex; justify-content: center">
                            <Foto/>
                        </div>  
                    </a-row>
                    <a-row :gutter="16">
                        <a-col :xs="24" :sm="12" :md="8" :lg="8">
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
                                            <template #suffixIcon>
                                            <a-button type="primary" style="padding: 0px 3px; margin-right:-11px; border-radius: 0px 5px 5px 0px; background: gray;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                </a-button>
                                            </template>
                                        </a-select>
                                    </div>
                                </a-form-item>
                            </div>   
                        </a-col>           
                        
                        <!-- <a-col :xs="24" :sm="12" :md="4" :lg="4">
                            <div>
                                <label>Tipo Doc</label>
                                <a-form-item
                                    name="tipo_doc"
                                    :rules="[{ required: true, message: 'Escoja el tipo', trigger: 'change' },]">
                                    <div>
                                        <a-select
                                            v-model:value="form.tipo_doc"
                                            style="">
                                            <a-select-option :value="1">DNI</a-select-option>
                                            <a-select-option :value="2">Carnet. Ext</a-select-option>    
                                            <template #suffixIcon>
                                            <a-button type="primary" style="padding: 0px 3px; margin-right:-11px; border-radius: 0px 5px 5px 0px; background: gray;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                </a-button>
                                            </template>
                                        </a-select>
                                    </div>
                                </a-form-item>
                            </div>   
                        </a-col>   -->
                        
                        
                            
                        <a-col :xs="24" :sm="12" :md="8" :lg="8">
                            <label v-if="form.tipo_doc === 1">N° documento <span style="color:red;">*</span></label>
                            <label v-else>N° Carnet Ext.</label>
                            <a-form-item 
                                name="nro_doc" 
                                :rules="[{ required: true, message: 'Ingrese el N° de documento'},                                            
                                { min: 8, message: 'El dni debe tener 8 digitos', trigger: 'blur'}]"
                            >
                                <a-input
                                v-if="form.tipo_doc === 1"
                                v-model:value="form.nro_doc"
                                @input="dniInput"
                                :maxlength="8"
                                style="height: 32px;"
                                >
                                <template #suffix>
                                    <a-button
                                    type="primary"
                                    style="padding: 0px 3px; margin-right:-12px; border-radius: 0px 5px 5px 0px; background: gray; width: 34px;"
                                    >
                                    <svg fill="#FFFFFF"  version="1.1" id="Artwork" width="24" height="24" stroke="white" stroke-width="2"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                                            viewBox="0 0 512 512" enable-background="new 0 0 24 24" xml:space="preserve">
                                        <g>
                                            <circle cx="99.3" cy="273.5" r="15.3"/>
                                            <path d="M162,288.8L162,288.8c8.5,0,15.3-6.9,15.3-15.3c0-8.5-6.9-15.3-15.3-15.3l0,0c-8.5,0-15.3,6.9-15.3,15.3
                                                C146.7,282,153.5,288.8,162,288.8z"/>
                                            <circle cx="224.6" cy="273.5" r="15.3"/>
                                            <circle cx="287.3" cy="273.5" r="15.3"/>
                                            <circle cx="350" cy="273.5" r="15.3"/>
                                            <circle cx="412.7" cy="273.5" r="15.3"/>
                                            <circle cx="130.7" cy="338.5" r="15.3"/>
                                            <circle cx="193.3" cy="338.5" r="15.3"/>
                                            <circle cx="256" cy="338.5" r="15.3"/>
                                            <circle cx="318.6" cy="338.5" r="15.3"/>
                                            <circle cx="381.3" cy="338.5" r="15.3"/>
                                            <path d="M134.5,403.4c0,6.8,5.5,12.3,12.3,12.3h218.6c6.8,0,12.3-5.5,12.3-12.3s-5.5-12.3-12.3-12.3H146.7
                                                C139.9,391.2,134.5,396.6,134.5,403.4z"/>
                                            <path d="M296.4,122.9h70.9c27.3,0,49.6-22.2,49.6-49.6s-22.2-49.6-49.6-49.6l-240.5,0.1c-6.8,0-12.2,5.5-12.2,12.3
                                                c0,6.8,5.5,12.2,12.3,12.2h0l240.5-0.1c13.8,0,25.1,11.2,25.1,25.1s-11.2,25.1-25.1,25.1h-70.9c-29.6,0-53.7,24.1-53.7,53.7v36.7
                                                H39.3c-15.6,0-28.3,12-28.3,26.7v246c0,14.7,12.7,26.7,28.3,26.7h433.4c15.6,0,28.3-12,28.3-26.7v-246c0-14.7-12.7-26.7-28.3-26.7
                                                H267.3v-36.7C267.3,136,280.3,122.9,296.4,122.9z M476.5,215.5v246c0,0.9-1.5,2.2-3.8,2.2H39.3c-2.3,0-3.8-1.3-3.8-2.2v-246
                                                c0-0.9,1.5-2.2,3.8-2.2h433.4C475.1,213.2,476.5,214.7,476.5,215.5z"/>
                                        </g>
                                        </svg>
                                    </a-button>
                                </template>
                                </a-input>
                            </a-form-item>
                        </a-col>
                        <a-col :xs="24" :sm="12" :md="8" :lg="8">
                            <label>Nombres<span style="color:red;">*</span></label>
                            <a-form-item name="nombres" :rules="[{ required: true, message: 'Ingrese los nombres' }]">
                            <a-input v-model:value="form.nombres" :disabled="!form.terminos" style="height: 32px;">
                                <template #suffix>
                                    <a-button
                                    type="primary"
                                    style="padding: 0px 3px; margin-right:-12px; border-radius: 0px 5px 5px 0px; background: gray; width: 34px;"
                                    >
                                    <svg fill="#FFFFFF"  version="1.1" id="Artwork" width="24" height="24" stroke="white" stroke-width="2"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                                            viewBox="0 0 512 512" enable-background="new 0 0 24 24" xml:space="preserve">
                                        <g>
                                            <circle cx="99.3" cy="273.5" r="15.3"/>
                                            <path d="M162,288.8L162,288.8c8.5,0,15.3-6.9,15.3-15.3c0-8.5-6.9-15.3-15.3-15.3l0,0c-8.5,0-15.3,6.9-15.3,15.3
                                                C146.7,282,153.5,288.8,162,288.8z"/>
                                            <circle cx="224.6" cy="273.5" r="15.3"/>
                                            <circle cx="287.3" cy="273.5" r="15.3"/>
                                            <circle cx="350" cy="273.5" r="15.3"/>
                                            <circle cx="412.7" cy="273.5" r="15.3"/>
                                            <circle cx="130.7" cy="338.5" r="15.3"/>
                                            <circle cx="193.3" cy="338.5" r="15.3"/>
                                            <circle cx="256" cy="338.5" r="15.3"/>
                                            <circle cx="318.6" cy="338.5" r="15.3"/>
                                            <circle cx="381.3" cy="338.5" r="15.3"/>
                                            <path d="M134.5,403.4c0,6.8,5.5,12.3,12.3,12.3h218.6c6.8,0,12.3-5.5,12.3-12.3s-5.5-12.3-12.3-12.3H146.7
                                                C139.9,391.2,134.5,396.6,134.5,403.4z"/>
                                            <path d="M296.4,122.9h70.9c27.3,0,49.6-22.2,49.6-49.6s-22.2-49.6-49.6-49.6l-240.5,0.1c-6.8,0-12.2,5.5-12.2,12.3
                                                c0,6.8,5.5,12.2,12.3,12.2h0l240.5-0.1c13.8,0,25.1,11.2,25.1,25.1s-11.2,25.1-25.1,25.1h-70.9c-29.6,0-53.7,24.1-53.7,53.7v36.7
                                                H39.3c-15.6,0-28.3,12-28.3,26.7v246c0,14.7,12.7,26.7,28.3,26.7h433.4c15.6,0,28.3-12,28.3-26.7v-246c0-14.7-12.7-26.7-28.3-26.7
                                                H267.3v-36.7C267.3,136,280.3,122.9,296.4,122.9z M476.5,215.5v246c0,0.9-1.5,2.2-3.8,2.2H39.3c-2.3,0-3.8-1.3-3.8-2.2v-246
                                                c0-0.9,1.5-2.2,3.8-2.2h433.4C475.1,213.2,476.5,214.7,476.5,215.5z"/>
                                        </g>
                                        </svg>
                                    </a-button>
                                </template>
                                </a-input>
                            </a-form-item>
                        </a-col>

                        <a-col :xs="24" :sm="12" :md="8" :lg="8">
                            <label>Primer Apellido<span style="color:red;">*</span></label>
                            <a-form-item name="paterno" :rules="[{ required: true, message: 'Ingrese los nombres' }]">
                            <a-input v-model:value="form.paterno" :disabled="!form.terminos" style="height: 32px;">
                                <template #suffix>
                                    <a-button
                                    type="primary"
                                    style="padding: 0px 3px; margin-right:-12px; border-radius: 0px 5px 5px 0px; background: gray; width: 34px;"
                                    >
                                    <svg fill="#FFFFFF"  version="1.1" id="Artwork" width="24" height="24" stroke="white" stroke-width="2"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                                            viewBox="0 0 512 512" enable-background="new 0 0 24 24" xml:space="preserve">
                                        <g>
                                            <circle cx="99.3" cy="273.5" r="15.3"/>
                                            <path d="M162,288.8L162,288.8c8.5,0,15.3-6.9,15.3-15.3c0-8.5-6.9-15.3-15.3-15.3l0,0c-8.5,0-15.3,6.9-15.3,15.3
                                                C146.7,282,153.5,288.8,162,288.8z"/>
                                            <circle cx="224.6" cy="273.5" r="15.3"/>
                                            <circle cx="287.3" cy="273.5" r="15.3"/>
                                            <circle cx="350" cy="273.5" r="15.3"/>
                                            <circle cx="412.7" cy="273.5" r="15.3"/>
                                            <circle cx="130.7" cy="338.5" r="15.3"/>
                                            <circle cx="193.3" cy="338.5" r="15.3"/>
                                            <circle cx="256" cy="338.5" r="15.3"/>
                                            <circle cx="318.6" cy="338.5" r="15.3"/>
                                            <circle cx="381.3" cy="338.5" r="15.3"/>
                                            <path d="M134.5,403.4c0,6.8,5.5,12.3,12.3,12.3h218.6c6.8,0,12.3-5.5,12.3-12.3s-5.5-12.3-12.3-12.3H146.7
                                                C139.9,391.2,134.5,396.6,134.5,403.4z"/>
                                            <path d="M296.4,122.9h70.9c27.3,0,49.6-22.2,49.6-49.6s-22.2-49.6-49.6-49.6l-240.5,0.1c-6.8,0-12.2,5.5-12.2,12.3
                                                c0,6.8,5.5,12.2,12.3,12.2h0l240.5-0.1c13.8,0,25.1,11.2,25.1,25.1s-11.2,25.1-25.1,25.1h-70.9c-29.6,0-53.7,24.1-53.7,53.7v36.7
                                                H39.3c-15.6,0-28.3,12-28.3,26.7v246c0,14.7,12.7,26.7,28.3,26.7h433.4c15.6,0,28.3-12,28.3-26.7v-246c0-14.7-12.7-26.7-28.3-26.7
                                                H267.3v-36.7C267.3,136,280.3,122.9,296.4,122.9z M476.5,215.5v246c0,0.9-1.5,2.2-3.8,2.2H39.3c-2.3,0-3.8-1.3-3.8-2.2v-246
                                                c0-0.9,1.5-2.2,3.8-2.2h433.4C475.1,213.2,476.5,214.7,476.5,215.5z"/>
                                        </g>
                                        </svg>
                                    </a-button>
                                </template>
                                </a-input>
                            </a-form-item>
                        </a-col>

                        <a-col :xs="24" :sm="12" :md="8" :lg="8">
                            <label>Segundo Apellido<span style="color:red;">*</span></label>
                            <a-form-item name="materno" :rules="[{ required: true, message: 'Ingrese los nombres' }]">
                            <a-input v-model:value="form.materno" :disabled="!form.terminos" style="height: 32px;">
                                <template #suffix>
                                    <a-button
                                    type="primary"
                                    style="padding: 0px 3px; margin-right:-12px; border-radius: 0px 5px 5px 0px; background: gray; width: 34px;"
                                    >
                                    <svg fill="#FFFFFF"  version="1.1" id="Artwork" width="24" height="24" stroke="white" stroke-width="2"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                                            viewBox="0 0 512 512" enable-background="new 0 0 24 24" xml:space="preserve">
                                        <g>
                                            <circle cx="99.3" cy="273.5" r="15.3"/>
                                            <path d="M162,288.8L162,288.8c8.5,0,15.3-6.9,15.3-15.3c0-8.5-6.9-15.3-15.3-15.3l0,0c-8.5,0-15.3,6.9-15.3,15.3
                                                C146.7,282,153.5,288.8,162,288.8z"/>
                                            <circle cx="224.6" cy="273.5" r="15.3"/>
                                            <circle cx="287.3" cy="273.5" r="15.3"/>
                                            <circle cx="350" cy="273.5" r="15.3"/>
                                            <circle cx="412.7" cy="273.5" r="15.3"/>
                                            <circle cx="130.7" cy="338.5" r="15.3"/>
                                            <circle cx="193.3" cy="338.5" r="15.3"/>
                                            <circle cx="256" cy="338.5" r="15.3"/>
                                            <circle cx="318.6" cy="338.5" r="15.3"/>
                                            <circle cx="381.3" cy="338.5" r="15.3"/>
                                            <path d="M134.5,403.4c0,6.8,5.5,12.3,12.3,12.3h218.6c6.8,0,12.3-5.5,12.3-12.3s-5.5-12.3-12.3-12.3H146.7
                                                C139.9,391.2,134.5,396.6,134.5,403.4z"/>
                                            <path d="M296.4,122.9h70.9c27.3,0,49.6-22.2,49.6-49.6s-22.2-49.6-49.6-49.6l-240.5,0.1c-6.8,0-12.2,5.5-12.2,12.3
                                                c0,6.8,5.5,12.2,12.3,12.2h0l240.5-0.1c13.8,0,25.1,11.2,25.1,25.1s-11.2,25.1-25.1,25.1h-70.9c-29.6,0-53.7,24.1-53.7,53.7v36.7
                                                H39.3c-15.6,0-28.3,12-28.3,26.7v246c0,14.7,12.7,26.7,28.3,26.7h433.4c15.6,0,28.3-12,28.3-26.7v-246c0-14.7-12.7-26.7-28.3-26.7
                                                H267.3v-36.7C267.3,136,280.3,122.9,296.4,122.9z M476.5,215.5v246c0,0.9-1.5,2.2-3.8,2.2H39.3c-2.3,0-3.8-1.3-3.8-2.2v-246
                                                c0-0.9,1.5-2.2,3.8-2.2h433.4C475.1,213.2,476.5,214.7,476.5,215.5z"/>
                                        </g>
                                        </svg>
                                    </a-button>
                                </template>
                                </a-input>
                            </a-form-item>
                        </a-col>


                        <a-col :xs="24" :sm="12" :md="8" :lg="8">
                            <label>Primer apellido<span style="color:red;">*</span></label>
                            <a-form-item name="paterno" :rules="[{ required: true, message: 'Ingrese su primer apellido' }]">
                            <a-input v-model:value="form.paterno" :disabled="!form.terminos"/>
                            </a-form-item>
                        </a-col>
                        <a-col :xs="24" :sm="12" :md="8" :lg="8">
                            <label>Segundo apellido <span style="color:red;">*</span></label>
                            <a-form-item name="materno" :rules="[{ required: true, message: 'Ingrese su segundo apellido' }]">
                            <a-input v-model:value="form.materno" :disabled="!form.terminos"/>
                            </a-form-item>
                        </a-col>
                        <a-col :xs="24" :sm="12" :md="8" :lg="8">
                            <label>Celular</label>
                            <a-form-item 
                                name="celular" 
                                :rules="[
                                    { required: true, message: 'Ingrese el N° de celular'},                                            
                                    { min: 8, message: 'El numero debe tener almenos 9 digitos', trigger: 'blur'}]"
                            >
                            <a-input v-model:value="form.celular" @input="celularInput" :maxlength="9" :disabled="!form.terminos"/>
                            </a-form-item>
                        </a-col>
                        <a-col :xs="24" :sm="12" :md="8" :lg="8">
                            <label>Fec. Nacimiento</label>
                            <a-form-item
                                name="fec_nac"
                                :rules="[ { required: true, message: 'Ingresa tu fecha de nacimiento', trigger: 'change'},
                                { validator: validateFechaNacimiento, trigger: 'change' }]"
                            >

                            <a-date-picker style="width:100%;" placeholder="Seleccionar fec. nacimiento" v-model:value="form.fec_nac" format="DD/MM/YYYY" :disabled="!form.terminos"/>
                            </a-form-item>
                        </a-col>
                        <a-col :xs="24" :sm="24" :md="24" :lg="24">
                            <label>Correo electrónico</label>
                            <a-form-item
                                name="correo"
                                :rules="[
                                    { required: true, message: 'Ingresa un correo valido', trigger: 'change'},
                                    { type: 'email', message: 'Ingresa un correo valido'}]"
                            >
                                <a-input v-model:value="form.correo" :disabled="!form.terminos"/>
                            </a-form-item>
                        </a-col>
                    </a-row>

                    <a-row>
                        <div style="margin-top: -10px;">
                            <h1 class="titulo-form">Datos Residencia</h1>
                        </div>  
                    </a-row>

                    <a-row :gutter="16">
                        <a-col :xs="24" :sm="12" :md="8" :lg="8">
                            <label>País</label>
                            <a-form-item name="pais">
                                <a-select v-model:value="form.pais" placeholder="Seleccione el país" :disabled="!form.terminos">
                                    <a-select-option :value="1">PERÚ</a-select-option>
                                    <a-select-option :value="2">BOLIVIA</a-select-option>
                                    <a-select-option :value="3">CHILE</a-select-option>
                                    <a-select-option :value="4">VENEZUELA</a-select-option>
                                    <a-select-option :value="5">COLOMBIA</a-select-option>
                                    <a-select-option :value="6">ECUADOR</a-select-option>
                                    <a-select-option :value="7">ARGENTINA</a-select-option>
                                    <a-select-option :value="8">BRASIL</a-select-option>
                                </a-select>
                            </a-form-item>
                        </a-col>
                        <a-col :xs="24" :sm="24" :md="24" :lg="16">
                            <label>Dep / Prov / Dist <span style="color:red;">*</span></label>
                            <a-form-item name="ubigeo_residencia">
                                <a-auto-complete
                                    v-model:value="residencia"                
                                    :options="residencias"
                                    @select="onSelectResidencias"
                                    :disabled="!form.terminos"
                                >
                                    <a-input 
                                        placeholder="Departamento"
                                        v-model:value="buscarResidencia"
                                        @keypress="handleKeyPress"
                                        :disabled="!form.terminos"
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

                    </a-row>


                    <a-row>
                        <div style="margin-top: -10px;">
                            <h1 class="titulo-form">Datos de estudios</h1>
                        </div>  
                    </a-row>

                    <a-row :gutter="16">
                        <a-col :xs="24" :sm="12" :md="8" :lg="8">
                            <label>Grado de instrucción<span style="color:red;">*</span></label>
                            <a-form-item name="grado">
                                <a-select
                                    v-model:value="form.grado"
                                    style="width: 100%;" :disabled="!form.terminos">
                                    <a-select-option :value="1">SECUNDARIA CONCLUIDA</a-select-option>
                                    <a-select-option :value="2">SECUNDARIA 5TO AÑO</a-select-option>
                                    <a-select-option :value="3">SECUNDARIA 4T0 AÑO</a-select-option>
                                    <a-select-option :value="4">SECUNDARIA 3ER AÑO</a-select-option>
                                </a-select>
                            </a-form-item>
                        </a-col>
                        <a-col :xs="24" :sm="24" :md="24" :lg="16">
                            <label>Ubic. colegio (dep/prov/dist)<span style="color:red;">*</span></label>
                            <a-form-item name="ubigeo_colegio">
                                <a-auto-complete
                                    v-model:value="ubicolegio"                
                                    :options="ubicolegios"
                                    @select="onSelectUbiColegios"
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
                        <a-col :xs="24" :sm="24" :md="24" :lg="24">
                            <label>Nombre del colegio</label>
                            <a-form-item>
                                <a-auto-complete
                                    v-model:value="colegio"                
                                    :options="colegios"
                                    @select="onSelectColegios"
                                    :disabled="!form.terminos"
                                >
                                    <a-input
                                        placeholder="Procedencia del Colegio"
                                        v-model:value="buscarC"
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
                    </a-row>


                    <a-row>
                        <div style="margin-top: -10px;">
                            <h1 class="titulo-form">Datos del simulacro</h1>
                        </div>  
                    </a-row>

                    <a-row :gutter="16">
                        <a-col :xs="24" :sm="24" :md="24" :lg="24">
                            <label>Programa de estudios<span style="color:red;">*</span></label>
                            <a-form-item name="programa" :rules="[{ required: true, message: 'Seleccione el programa' }]">
                                <a-select
                                    v-model:value="form.programa"
                                    style="width: 100%;" :disabled="!form.terminos">
                                    <a-select-option :value='1'>ADMINISTRACIÓN</a-select-option>
                                    <a-select-option :value='2'>ANTROPOLOGÍA</a-select-option>
                                    <a-select-option :value='3'>ARQUITECTURA Y URBANISMO</a-select-option>
                                    <a-select-option :value='4'>ARTE: ARTES PLÁSTICAS</a-select-option>
                                    <a-select-option :value='5'>ARTE: DANZA</a-select-option>
                                    <a-select-option :value='6'>ARTE: MÚSICA</a-select-option>
                                    <a-select-option :value='8'>BIOLOGÍA: ECOLOGÍA</a-select-option>
                                    <a-select-option :value='9'>BIOLOGÍA: MICROBIOLOGÍA Y LABORATORIO CLÍNICO</a-select-option>
                                    <a-select-option :value='10'>BIOLOGÍA: PESQUERÍA</a-select-option>
                                    <a-select-option :value='11'>CIENCIAS CONTABLES</a-select-option>
                                    <a-select-option :value='12'>CIENCIAS DE LA COMUNICACIÓN SOCIAL</a-select-option>
                                    <a-select-option :value='13'>CIENCIAS FÍSICO MATEMÁTICAS: FÍSICA</a-select-option>
                                    <a-select-option :value='14'>CIENCIAS FÍSICO MATEMÁTICAS: MATEMÁTICAS</a-select-option>
                                    <a-select-option :value='15'>DERECHO</a-select-option>
                                    <a-select-option :value='16'>EDUCACIÓN FÍSICA</a-select-option>
                                    <a-select-option :value='17'>EDUCACIÓN INICIAL</a-select-option>
                                    <a-select-option :value='18'>EDUCACIÓN PRIMARIA</a-select-option>
                                    <a-select-option :value='19'>EDUCACIÓN SECUNDARIA DE LA ESPECIALIDAD DE CIENCIA, TECNOLOGÍA Y AMBIENTE</a-select-option>
                                    <a-select-option :value='20'>EDUCACIÓN SECUNDARIA DE LA ESPECIALIDAD DE CIENCIAS SOCIALES</a-select-option>
                                    <a-select-option :value='21'>EDUCACIÓN SECUNDARIA DE LA ESPECIALIDAD DE LENGUA, LITERATURA, PSICOLOGÍA Y FILOSOFÍA</a-select-option>
                                    <a-select-option :value='22'>EDUCACIÓN SECUNDARIA DE LA ESPECIALIDAD DE MATEMÁTICA, FÍSICA, COMPUTACIÓN E INFORMÁTICA</a-select-option>
                                    <a-select-option :value='23'>ENFERMERÍA</a-select-option>
                                    <a-select-option :value='24'>INGENIERÍA AGRÍCOLA</a-select-option>
                                    <a-select-option :value='25'>INGENIERÍA AGROINDUSTRIAL</a-select-option>
                                    <a-select-option :value='26'>INGENIERÍA AGRONÓMICA</a-select-option>
                                    <a-select-option :value='27'>INGENIERÍA CIVIL</a-select-option>
                                    <a-select-option :value='28'>INGENIERÍA DE MINAS</a-select-option>
                                    <a-select-option :value='29'>INGENIERÍA DE SISTEMAS</a-select-option>
                                    <a-select-option :value='30'>INGENIERÍA ECONÓMICA</a-select-option>
                                    <a-select-option :value='31'>INGENIERÍA ELECTRÓNICA</a-select-option>
                                    <a-select-option :value='32'>INGENIERÍA ESTADÍSTICA E INFORMÁTICA</a-select-option>
                                    <a-select-option :value='33'>INGENIERÍA GEOLÓGICA</a-select-option>
                                    <a-select-option :value='34'>INGENIERÍA MECÁNICA ELÉCTRICA</a-select-option>
                                    <a-select-option :value='35'>INGENIERÍA METALÚRGICA</a-select-option>
                                    <a-select-option :value='36'>INGENIERÍA QUÍMICA</a-select-option>
                                    <a-select-option :value='37'>INGENIERÍA TOPOGRÁFICA Y AGRIMENSURA</a-select-option>
                                    <a-select-option :value='38'>MEDICINA HUMANA</a-select-option>
                                    <a-select-option :value='39'>MEDICINA VETERINARIA Y ZOOTECNIA</a-select-option>
                                    <a-select-option :value='40'>NUTRICIÓN HUMANA</a-select-option>
                                    <a-select-option :value='41'>ODONTOLOGÍA</a-select-option>
                                    <a-select-option :value='42'>SOCIOLOGÍA</a-select-option>
                                    <a-select-option :value='43'>TRABAJO SOCIAL</a-select-option>
                                    <a-select-option :value='44'>TURISMO</a-select-option>
                                </a-select>
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
        <div style="text-align: justify" > 
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
import { watch, watchEffect, computed, ref, unref, reactive, onMounted } from 'vue';
import { DownOutlined, ExclamationCircleOutlined, FormOutlined, PrinterOutlined, DeleteOutlined, SearchOutlined, SaveOutlined, EyeOutlined} from '@ant-design/icons-vue';
import { notification } from 'ant-design-vue';
import { Head } from '@inertiajs/vue3';

import axios from 'axios';

const baseUrl = window.location.origin;
const residencia = ref(null)
const redseleccionado = ref(null)
const buscarResidencia = ref(null)
const residencias = ref([])
const ubicolegio = ref(null)
const ubicolegioseleccionado = ref(null)
const buscarColegio = ref(null)
const ubicolegios = ref([])
const modalAviso = ref(true);
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
        tipo_doc: 1, 
        nro_doc:'',
        paterno:'',
        materno:'', 
        nombres:'', 
        sexo: null, 
        fec_nac:'',
        celular:'',
        correo:'',
        pais:1,
        ubigeo_residencia:'',
        grado:1, 
        ubigeo_colegio:null, 
        id_colegio: null, 
        terminos:false,
        id_pago:null,
    });
    
    const dniInput = (event) => { form.nro_doc = event.target.value.replace(/\D/g, ''); };
    const celularInput = (event) => { form.celular = event.target.value.replace(/\D/g, ''); };
    
    const save = async () => {
        // loading.value = true;
        try {
            const values = await formDatos.value.validateFields();
            const response = await axios.post('/save-simulacro-participante', form);
            if (response.status === 202) {
                console.log(response.data.errors);
            } else {
                inscrito.value = true;
                limpiar();
                notificacion('success', response.data.titulo, response.data.mensaje);
            }
        } catch (error) {
            console.error(error);
        }
        // loading.value = false;
    }
    
    watch(buscarC, ( newValue, oldValue ) => { getColegios() })
    watch(ubicolegioseleccionado, ( newValue, oldValue ) => { getColegios() })
    watch(buscarResidencia, ( newValue, oldValue ) => {  if(newValue.length >= 3){ getUbigeosResidencia() }})
    watch(buscarColegio, ( newValue, oldValue ) => { if(newValue.length >= 3){ getUbigeosColegio() } })
    watch(() => form.nro_doc, (newValue, oldValue) => { 
        if(newValue.length == 8){ 
            getInscrito();
            if(inscrito.value === false){
                getPagado();
                if(pagado.value === false){
                    getPagosOnline()
                }    
            }
        } 
    });
    
    const onSelectResidencias = (value, option) => { redseleccionado.value = option.key; form.ubigeo_residencia = option.key };
    const onSelectUbiColegios = (value, option) => { ubicolegioseleccionado.value = option.key; };
    const onSelectColegios = (value, option) => { ubicolegioseleccionado.value = option.key; form.id_colegio = option.key };
    
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
    
    
    const getPagado = async () => {
        axios.get("/get-pago-simulacro/"+form.nro_doc)
        .then((response) => {
            pagado.value = response.data.estado;
            form.id_pago = response.data.id_pago;
            if(response.data.estado === true){
                activeKey.value = '2';
            }
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
    
          fechaMinima.setFullYear(fechaMinima.getFullYear() - 31);
          fechaMaxima.setFullYear(fechaMaxima.getFullYear() - 13);
    
          if (fechaNacimiento > fechaMaxima || fechaNacimiento < fechaMinima) {
            reject(new Error('Debes tener entre 13 y 20 años'));
          } else {
            resolve();
          }
        }
      });
    }
    
    const pagosloading = ref(false);
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
    
    
    const getPagosOnline = async () => {
    
        estadoPago.value = null;
        axios.get("/get-pagos-simulacro-online/"+form.nro_doc)
        .then((response) => {
            if(response.data.data.length === 0){
                estadoPago.value = "No tiene registrado ningun para el este Simulacro de Admisión 2023"
                console.log(estadoPago.value);
            }else{
                pagos.value = response.data.data;
            }
        })
        .catch((error) => {
            if (error.response) {
                console.error('Error de servidor:', error.response.data);
            } else if (error.request) {
                console.error('Error de red:', error.request);
                } else { console.error('Error de configuración:', error.message); }
        });
    
    }
    
    
    const enviarPago = async () => {
        pagosloading.value = true;
        axios.post("/subir-pagos",{"pagos": selectedItems.value, "dni": form.nro_doc  })
        .then((response) => {
            confirmarcion.value = response.data.estado;
            form.id_pago = response.data.id_pago;
            console.log(response.data.estado.estado)
            if(response.data.estado === true) 
            { 
                activeKey.value = '2'
            }
        })
        .catch((error) => {
            if (error.response) {
                console.error('Error de servidor:', error.response.data);
            } else if (error.request) {
                console.error('Error de red:', error.request);
                } else { console.error('Error de configuración:', error.message); }
        });
        pagosloading.value = false;
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