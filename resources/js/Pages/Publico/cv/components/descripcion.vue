<template>
<a-card class="mx-2 my-2">
  <div>
    <div class="flex justify-between border-b-2" style="border-bottom: solid 2px #009DD1; padding-bottom: 8px;">
      <div><span style="font-weight: bold; font-size: 1rem; color:#009DD1;">Descripción breve</span></div>
      <div v-if="!descripcion.descripcion"style="margin-top: -5px;"><a-button @click="modal = true">Agregar</a-button></div>
    </div>

    <div class="mt-3"  v-if="descripcion.descripcion" >
      <p style="text-align: justify;">
        {{ descripcion.descripcion }}
        <a-popconfirm title="¿Seguro de eliminar？" ok-text="Si" cancel-text="No" @confirm="eliminar(descripcion.id)">
          <a-button text style="width: 20px; height: 20px; padding-left: 3px;">
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
          </a-button>
        </a-popconfirm>

      </p>
    </div>
  </div>
</a-card>  


<a-modal v-model:open="modal" title="Descripción breve" :footer="false">
  <a-form
      ref="formDatos"
      name="form"
      :model="form" 
      :rules="formRules">
      <a-row :gutter="16">
          <a-col :xs="24" :sm="24" :md="24" :lg="24">
              <a-form-item name="descripcion" :rules="[{ required: true, message: 'Este campo es obligatorio' }]">
                  <a-textarea :rows="6" :maxlength="800" show-count v-model:value="form.descripcion" >
                  </a-textarea>
              </a-form-item>
          </a-col>

          <a-col :xs="24" :sm="24" :md="24" :lg="24">
            <div class="flex justify-end">
                <a-button @click="save()" type="primary" style="margin-top: 0px">
                  Guardar descripción 
                </a-button>
            </div>
          </a-col>
      </a-row>
  </a-form>

</a-modal>
</template>
    
<script setup>
import { ref, reactive, watch } from 'vue';
import axios from 'axios';
const baseUrl = window.location.origin;
const modal = ref(false);
import { notification } from 'ant-design-vue';
import { h } from 'vue';


const formDatos = ref(null);
const form = reactive({
  id: null,
  descripcion: null,
});

const save = async () => {
  const values = await formDatos.value.validateFields();
  try {
      await axios.post("save-descripcion", form);
      modal.value = false;
      if(form.id == null){ noty("","DESCRIPCIÓN GUARDADA","background:#90EE90DF; font-weight:bold;");
      }else{ noty("","DESCRIPCIÓN ACTUALIZADA","background:#009DD1DF; font-weight:bold;") }
      await getDescripcion();
  } catch (error) {
  }
};

const eliminar = async (id) => {
    try {
        const res = await axios.get(`/delete-descripcion/${id}`);
        if (res.data.estado) { 
          noty("","DESCRIPCIÓN ELIMINADA","background:#DC143CDF; color:white;")
        }
        await getDescripcion();
    } catch (error) {
        noty("","NO SE PUDO ELIMINAR","background:#DC143CDF; color:white;")
    }
};

const descripcion = ref([]);
const getDescripcion = async () => {
    try {
        const res = await axios.get("/get-descripcion");
        if (res.data.estado === true) {
            descripcion.value = res.data.datos;
        }
    } catch (error) {
        noty("","OCURRIO UN ERRO INTENTELO MÁS TARDE","background:#Da143CbF; color:white;")
        console.error("Error en la solicitud de tipos:", error);
    }
};

const noty = (titulo, descripcion, estilo) => {
  notification.open({
    message: titulo,
    description: descripcion,
    style: estilo
  });
};

getDescripcion();

</script>
    