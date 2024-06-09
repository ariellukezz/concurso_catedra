<template>
    <div class="flex justify-center w-full">
      <div class="w-full flex flex-col items-center text-center">
        <div v-if="previewImage" class="mt-5 text-center">
          <div class="w-36 h-36 rounded-full overflow-hidden">
            <img :src="previewImage" alt="Preview" class="w-full h-full object-cover" />
          </div>
        </div>
        <div v-else class="mt-5 text-center">
          <div class="w-36 h-36 rounded-full overflow-hidden">
            <img src="https://i.pinimg.com/236x/2f/97/f0/2f97f05b32547f54ef1bdf99cd207c90.jpg" alt="Preview" class="w-full h-full object-cover" />
          </div>
        </div>
        <a-upload
          :before-upload="beforeUpload"
          @change="handleChange"
          @remove="handleRemove"
          class="mt-4"
        >
          <a-button>
            <upload-outlined />
            Seleccionar foto
          </a-button>
        </a-upload>
      </div>
    </div>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  import axios from 'axios';
  import { message } from 'ant-design-vue';
  import { UploadOutlined } from '@ant-design/icons-vue';
  
  const fileList = ref([]);
  const uploading = ref(false);
  const previewImage = ref('');
  
  const handleRemove = file => {
    const index = fileList.value.indexOf(file);
    const newFileList = fileList.value.slice();
    newFileList.splice(index, 1);
    fileList.value = newFileList;
  };
  
  const beforeUpload = file => {
    fileList.value = [...(fileList.value || []), file];
    return false;
  };
  
  const handleChange = ({ fileList: newFileList }) => {
    fileList.value = newFileList.map(file => {
      if (!file.url && !file.preview) {
        file.preview = URL.createObjectURL(file.originFileObj);
      }
      return file;
    });
  
    if (fileList.value.length > 0) {
      previewImage.value = fileList.value[0].url || fileList.value[0].preview;
      // Llama a la función de carga automáticamente cuando se selecciona un archivo
      uploadFiles();
    } else {
      previewImage.value = '';
    }
  };
  
  const uploadFiles = () => {
    const formData = new FormData();
    fileList.value.forEach(file => {
      formData.append('files[]', file.originFileObj);
    });
    uploading.value = false;
  
    axios.post('https://www.mocky.io/v2/5cc8019d300000980a055e76', formData)
      .then(() => {
        fileList.value = [];
        uploading.value = false;
        message.success('upload successfully.');
      })
      .catch(() => {
        uploading.value = false;
        message.error('upload failed.');
      });
  };
  </script>
  
  <style scoped>
  /* Puedes agregar estilos personalizados aquí si es necesario */
  </style>