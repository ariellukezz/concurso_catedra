<template>
  <aside  class="z-20 hidden w-64 overflow-y-auto md:block flex-shrink-0" style="background: white; width: 230px; border-right: 1px solid #00000010;">    
      <div class="" style="margin-top: 70px;" >
      <div style="width: 100%;">
        <ul class="mt-0 text-gray-800" style="color: #808080; margin-top: 0px;">
        <li class="relative px-0 py-0" :class="[route().current('registro-index')? 'activado':'desactivado']" >
          <NavLink :href="route('registro-index')" style="color: gray; padding: 10px 5px;">
            <div class="flex">
              <div class="mr-2 bg-gray-400 w-8 h-8 mt-[-4px] mb-[-10px] flex justify-center items-center">
                <span style="font-weight: bold; font-size: 1.4rem; color: white;">
                  1
                </span>
              </div>
              <div>
                <span class="font-bold " style="font-size: .9rem;">
                  Datos personales
                </span>

              </div>
            </div>
          </NavLink>
        </li>
        <div style="">
          <div>
            <hr class="vertical-hr">
          </div>
        </div>
        <li class="relative px-0 py-0" :class="[route().current('dashboard')? 'activado':'desactivado']">
          <NavLink :href="route('registro-index')" style="color: gray; padding: 10px 5px;">
            <div class="flex">
              <div class="mr-2 w-[33px] h-[32px] -mt-[8px] -mb-[10px] flex justify-center items-center" style="border: solid 2px #cdcdcd;">
                <span class="text-color-gray-100" style="font-weight: bold; font-size: 1.4rem; color: #bdbdbd;">
                  2
                </span>
              </div>
              <div class="-mt-[4px]">
                <span class="font-bold " style="font-size: .9rem;">
                  Títulos
                </span>

              </div>
            </div>
          </NavLink>
        </li>
        <div style="">
          <div>
            <hr class="vertical-hr">
          </div>
        </div>

      </ul>
      </div>
      
    </div>
  </aside>
</template>

<script>
import NavLink from '@/Components/NavLink.vue'
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue'

export default {
  components: {
    NavLink,
    Link,
  },

  setup() {
    let showingTwoLevelMenu = ref(false)
    const reportRoutes = ['director-inicio', 'otra-ruta', 'mas-rutas'];

    const currentRoute = route().current();
    const isReportRoute = ref(reportRoutes.includes(currentRoute));
    return {
      showingTwoLevelMenu,
      isReportRoute
    }
  },
}
</script>

<style scoped>
.desactivado{
  margin: 0px 0px;
  margin-top: -20px;
}
.activado{
  margin: 0px 0px;
  background: #e9e9e9;
}

.vertical-hr {
    border: none;
    border-left: 3px solid #cdcdcd;
    height: 40px;
    margin: 0 32px;
    margin-top: -10px;
    margin-bottom: -20px;
}
</style>