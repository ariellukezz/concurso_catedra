<template>
  <aside class="z-20 hidden w-64 overflow-y-auto md:block flex-shrink-0 bg-white border-r border-gray-200" style="width: 230px;">
    <div class="mt-16 w-full">
      <ul class="mt-0 text-gray-800">
        <li class="relative px-0 py-0" :class="[route().current('registro-datos_personales') ? 'activado' : 'desactivado']">
          <NavLink :href="route('registro-datos_personales')" class="text-gray-500 px-2.5 py-2.5">
            <div class="flex">
              <div :class="[route().current('registro-datos_personales') ? 'div-activado' : 'div-desactivado']">
                <span :class="[route().current('registro-datos_personales') ? 'activado-nro' : 'desactivado-nro']">
                  1
                </span>
              </div>
              <div>
                <span class="font-bold text-sm">Datos personales</span>
              </div>
            </div>
          </NavLink>
        </li>
        <div class="flex justify-center">
          <hr class="vertical-hr">
        </div>
        <li class="relative px-0 py-0" :class="[route().current('registro-titulos') ? 'activado' : 'desactivado']">
          <NavLink :href="route('registro-titulos')" class="text-gray-500 px-2.5 py-2.5">
            <div class="flex">
              <div :class="[route().current('registro-titulos') ? 'div-activado' : 'div-desactivado']">
                <span :class="[route().current('registro-titulos') ? 'activado-nro' : 'desactivado-nro']">
                  2
                </span>
              </div>
              <div>
                <span class="font-bold text-sm">Títulos</span>
              </div>
            </div>
          </NavLink>
        </li>
        <div class="flex justify-center">
          <hr class="vertical-hr">
        </div>
        <li class="relative px-0 py-0" :class="[route().current('registro-datos_personales') ? 'activado' : 'desactivado']">
          <NavLink :href="route('registro-datos_personales')" class="text-gray-500 px-2.5 py-2.5">
            <div class="flex">
              <div :class="[route().current('registro-datos_personales') ? 'div-activado' : 'div-desactivado']">
                <span :class="[route().current('registro-datos_personales') ? 'activado-nro' : 'desactivado-nro']">
                  3
                </span>
              </div>
              <div>
                <span class="font-bold text-sm">Grados obtenidos</span>
              </div>
            </div>
          </NavLink>
        </li>
        <div class="flex justify-center">
          <hr class="vertical-hr">
        </div>
        <div class="flex justify-center">
          <hr class="vertical-hr">
        </div>
        <li class="relative px-0 py-0" :class="[route().current('registro-datos_personales') ? 'activado' : 'desactivado']">
          <NavLink :href="route('registro-datos_personales')" class="text-gray-500 px-2.5 py-2.5">
            <div class="flex">
              <div :class="[route().current('registro-datos_personales') ? 'div-activado' : 'div-desactivado']">
                <span :class="[route().current('registro-datos_personales') ? 'activado-nro' : 'desactivado-nro']">
                  3
                </span>
              </div>
              <div>
                <span class="font-bold text-sm">Grados obtenidos</span>
              </div>
            </div>
          </NavLink>
        </li>
        <div class="flex justify-center">
          <hr class="vertical-hr">
        </div>
        <div class="flex justify-center">
          <hr class="vertical-hr">
        </div>
        <li class="relative px-0 py-0" :class="[route().current('registro-datos_personales') ? 'activado' : 'desactivado']">
          <NavLink :href="route('registro-datos_personales')" class="text-gray-500 px-2.5 py-2.5">
            <div class="flex">
              <div :class="[route().current('registro-datos_personales') ? 'div-activado' : 'div-desactivado']">
                <span :class="[route().current('registro-datos_personales') ? 'activado-nro' : 'desactivado-nro']">
                  3
                </span>
              </div>
              <div>
                <span class="font-bold text-sm">Grados obtenidos</span>
              </div>
            </div>
          </NavLink>
        </li>
        <div class="flex justify-center">
          <hr class="vertical-hr">
        </div>
        <div class="flex justify-center">
          <hr class="vertical-hr">
        </div>
        <li class="relative px-0 py-0" :class="[route().current('registro-datos_personales') ? 'activado' : 'desactivado']">
          <NavLink :href="route('registro-datos_personales')" class="text-gray-500 px-2.5 py-2.5">
            <div class="flex">
              <div :class="[route().current('registro-datos_personales') ? 'div-activado' : 'div-desactivado']">
                <span :class="[route().current('registro-datos_personales') ? 'activado-nro' : 'desactivado-nro']">
                  3
                </span>
              </div>
              <div>
                <span class="font-bold text-sm">Grados obtenidos</span>
              </div>
            </div>
          </NavLink>
        </li>
      </ul>
    </div>
  </aside>
</template>

<script>
import NavLink from '@/Components/NavLink.vue'
import { ref } from 'vue'

export default {
  components: {
    NavLink,
  },

  setup() {
    let showingTwoLevelMenu = ref(false)
    const reportRoutes = ['registro-datos_personales', 'otra-ruta', 'mas-rutas'];

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
.desactivado {
  margin: 0px 0px;
}
.activado {
  margin: 0px 0px;
  background: #e9e9e9;
}

.activado-nro {
  font-weight: bold;
  font-size: 1.4rem;
  color: white;
}
.desactivado-nro {
  font-weight: bold;
  font-size: 1.4rem;
  color: #bdbdbd;
}
.div-activado {
  margin-right: 0.5rem;
  background: #4a5568;
  width: 2rem;
  height: 2rem;
  margin-top: -0.3rem;
  margin-bottom: -0.625rem;
  display: flex;
  justify-content: center;
  align-items: center;
}
.div-desactivado {
  margin-right: 0.5rem;
  border: 3px solid #bdbdbd;
  width: 2rem;
  height: 2rem;
  margin-top: -0.3rem;
  margin-bottom: -0.625rem;
  display: flex;
  justify-content: center;
  align-items: center;
}

.vertical-hr {
  border: none;
  border-left: 3px solid #cdcdcd;
  height: 30px;
  margin: 0;
  margin-left: -150px;
  margin-top: -10px;
  margin-bottom: -20px;
}
</style>
