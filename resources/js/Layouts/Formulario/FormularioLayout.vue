<template>
    <div>
      <div class="flex h-screen bg-gray-100" style="position: relative; "> 
        <div class="men" style="width: 40px; height: 40px; position: absolute; transition: all 0.3s ease; z-index: 11; top: 10px; padding-left: 15px;" :style="{'left': sidewidth, 'margin-left':margin  } ">
          <button @click="sidechange" class="p-1 mr-5 -ml-1 rounded-md focus:outline-none focus:shadow-outline-purple" aria-label="Menu">
            <svg class="w-5 h-5" aria-hidden="true" fill="white" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            </svg>
          </button>  
        </div>
  
        <!-- <NavigationMobile /> -->
        <Navigation :style="{ 'width': sidewidth }" style="z-index: 1; transition: all 0.3s ease;"/>
        <div class="flex flex-col flex-1 w-full" style="position: absolute;">
          <TopMenu :usuario="usu"/>
          <div  :style="{ 'margin-left':sidewidth }" style="z-index: 0; transition: all 0.3s ease;"> 
            <main class="h-full overflow-y-auto" style="">
              <div class="container px-0 mx-auto grid">
                <h2 class="my-1 text-xl font-semibold text-gray-700">
                  <slot name="header" />
                </h2>
                <slot/>
              </div>
            </main>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  import Navigation from './Navigation.vue';
  import TopMenu from "./HeaderFormulario.vue";
  //import NavigationMobile from './NavigationMobile.vue';
  import {ref, onMounted, watch} from 'vue'
  
  const sidewidth = ref('230px')
  const margin = ref('0px')
  
  const sidechange = () => {
    if( sidewidth.value === '0px'){
      sidewidth.value = '230px';
      margin.value = '0px';
    }else{
      sidewidth.value = '0px';
      margin.value = '230px';
    }
  }
  const usu = ref(null) 
  const getUsuario =  async () => {
    let res = await axios.get("/get-usuario");
    usu.value = res.data.datos;
  }
  
  onMounted(() => {
    getUsuario();
    const updateSidewidth = () => {
      if (window.innerWidth < 768) {
        sidewidth.value = '0px';
      } else {
        sidewidth.value = '230px';
      }
    };
    updateSidewidth();
    window.addEventListener('resize', updateSidewidth);
    
    watch(() => {
      return () => {
        window.removeEventListener('resize', updateSidewidth);
      };
    });
  });
  
  </script>
  <style scoped>
  @media only screen and (max-width: 767px) { .men { display: none; } }
  
  </style>