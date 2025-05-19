<template>
    <div>
      <div class="flex h-screen bg-gray-100"> 
        <NavigationMobile  :style="{ 'width': sidewidth }" style="z-index: 1; transition: all 0.3s ease;"/>
        <div class="flex flex-col flex-1 w-full">
          <TopMenu :usuario="usu"/>
          <div> 
            <main class="h-full overflow-y-auto" style="">
              <div class="mx-auto grid">
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
  // import Navigation from './Navigation.vue';
  import TopMenu from "./HeaderFormulario.vue";
  import NavigationMobile from './NavigationMobile.vue';
  import {ref, onMounted, watch} from 'vue'
  
  const sidewidth = ref('230px')
  const margin = ref('0px')
  
  const usu = ref(null) 
  const getUsuario =  async () => {
    let res = await axios.get("/get-usuario");
    usu.value = res.data.datos;
  }
  
onMounted(() => {
  getUsuario();
});
  
</script>
<style scoped>
  @media only screen and (max-width: 767px) { .men { display: none; } }
  
::-webkit-scrollbar {
  width: 8px;
  height: 8px;
}

::-webkit-scrollbar-thumb {
  background-color: #36365723;
  border-radius: 10px;
}

::-webkit-scrollbar-track {
  background-color: #f1f1f1;
}

</style>