<template>
  <aside class="z-20 hidden w-64 overflow-y-auto md:block flex-shrink-0 bg-white border-r border-gray-200">
    <div class="mt-16 w-full">
      <ul class="mt-0 text-gray-800">
        <li class="relative px-0 py-0" :class="[route().current('registro-datos_personales') ? 'activado' : 'desactivado']">
          <NavLink :href="route('registro-datos_personales')" class="text-gray-500 px-0.5 py-1.5">
            <div class="flex">
              <div :class="[route().current('registro-datos_personales') ? 'div-activado' : 'div-desactivado']">
                <span :class="[route().current('registro-datos_personales') ? 'activado-nro' : 'desactivado-nro']">
                  01
                </span>
              </div>
              <div>
                <span class="font-bold text-sm" style="font-size: .8rem ;">Datos personales</span>
              </div>
            </div>
          </NavLink>
        </li>
        <div class="flex justify-center">
          <hr class="vertical-hr">
        </div>
        <li class="relative px-0 py-0" :class="[route().current('registro-titulos') ? 'activado' : 'desactivado']">
          <NavLink :href="route('registro-titulos')" class="text-gray-500 px-0.5 py-1.5">
            <div class="flex">
              <div :class="[route().current('registro-titulos') ? 'div-activado' : 'div-desactivado']">
                <span :class="[route().current('registro-titulos') ? 'activado-nro' : 'desactivado-nro']">
                  02
                </span>
              </div>
              <div>
                <span class="font-bold text-sm" style="font-size: .8rem ;">Títulos</span>
              </div>
            </div>
          </NavLink>
        </li>
        <div class="flex justify-center">
          <hr class="vertical-hr">
        </div>
        <li class="relative px-0 py-0" :class="[route().current('registro_estudios_actualizacion') ? 'activado' : 'desactivado']">
          <NavLink :href="route('registro_estudios_actualizacion')" class="text-gray-500 px-0.5 py-1.5">
            <div class="flex">
              <div :class="[route().current('registro_estudios_actualizacion') ? 'div-activado' : 'div-desactivado']">
                <span :class="[route().current('registro_estudios_actualizacion') ? 'activado-nro' : 'desactivado-nro']">
                  03
                </span>
              </div>
              <div>
                <span class="font-bold text-sm" style="font-size: .8rem ;">Estudios de posgrado y actualización</span>
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
        <li class="relative px-0 py-0" :class="[route().current('registro-investigaciones-publicaciones') ? 'activado' : 'desactivado']">
          <NavLink :href="route('registro-investigaciones-publicaciones')" class="text-gray-500 px-0.5 py-1.5">
            <div class="flex">
              <div :class="[route().current('registro-investigaciones-publicaciones') ? 'div-activado' : 'div-desactivado']">
                <span :class="[route().current('registro-investigaciones-publicaciones') ? 'activado-nro' : 'desactivado-nro']">
                  04
                </span>
              </div>
              <div>
                <span class="font-bold text-sm" style="font-size: .8rem ;">Investigaciones y publicaciones</span>
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
        <li class="relative px-0 py-0" :class="[route().current('registro-experiencia-no-docente') ? 'activado' : 'desactivado']">
          <NavLink :href="route('registro-experiencia-no-docente')" class="text-gray-500 px-0.5 py-1.5">
            <div class="flex">
              <div :class="[route().current('registro-experiencia-no-docente') ? 'div-activado' : 'div-desactivado']">
                <span :class="[route().current('registro-experiencia-no-docente') ? 'activado-nro' : 'desactivado-nro']">
                  05
                </span>
              </div>
              <div>
                <span class="font-bold text-sm" style="font-size: .8rem ;">Experiencia profesional no docente</span>
              </div>
            </div>
          </NavLink>
        </li>
        <div class="flex justify-center">
          <hr class="vertical-hr">
        </div>
        <li class="relative px-0 py-0" :class="[route().current('registro-datos_personales') ? 'activado' : 'desactivado']">
          <NavLink :href="route('registro-datos_personales')" class="text-gray-500 px-0.5 py-1.5">
            <div class="flex">
              <div :class="[route().current('registro-datos_personales') ? 'div-activado' : 'div-desactivado']">
                <span :class="[route().current('registro-datos_personales') ? 'activado-nro' : 'desactivado-nro']">
                  06
                </span>
              </div>
              <div>
                <span class="font-bold text-sm" style="font-size: .8rem ;">Experiencia en docencia universitaria</span>
              </div>
            </div>
          </NavLink>
        </li>
        <div class="flex justify-center">
          <hr class="vertical-hr">
        </div>
        <li class="relative px-0 py-0" :class="[route().current('registro-datos_personales') ? 'activado' : 'desactivado']">
          <NavLink :href="route('registro-datos_personales')" class="text-gray-500 px-0.5 py-1.5">
            <div class="flex">
              <div :class="[route().current('registro-datos_personales') ? 'div-activado' : 'div-desactivado']">
                <span :class="[route().current('registro-datos_personales') ? 'activado-nro' : 'desactivado-nro']">
                  07
                </span>
              </div>
              <div>
                <span class="font-bold text-sm" style="font-size: .8rem ;">Manejo de software especializado</span>
              </div>
            </div>
          </NavLink>
        </li>
        <div class="flex justify-center">
          <hr class="vertical-hr">
        </div>
        <li class="relative px-0 py-0" :class="[route().current('registro-datos_personales') ? 'activado' : 'desactivado']">
          <NavLink :href="route('registro-datos_personales')" class="text-gray-500 px-0.5 py-1.5">
            <div class="flex">
              <div :class="[route().current('registro-datos_personales') ? 'div-activado' : 'div-desactivado']">
                <span :class="[route().current('registro-datos_personales') ? 'activado-nro' : 'desactivado-nro']">
                  08
                </span>
              </div>
              <div>
                <span class="font-bold text-sm" style="font-size: .8rem ;">Idioma (extranjero o nativo)</span>
              </div>
            </div>
          </NavLink>
        </li>
        <div class="flex justify-center">
          <hr class="vertical-hr">
        </div>
        <li class="relative px-0 py-0" :class="[route().current('registro-datos_personales') ? 'activado' : 'desactivado']">
          <NavLink :href="route('registro-datos_personales')" class="text-gray-500 px-0.5 py-1.5">
            <div class="flex">
              <div :class="[route().current('registro-datos_personales') ? 'div-activado' : 'div-desactivado']">
                <span :class="[route().current('registro-datos_personales') ? 'activado-nro' : 'desactivado-nro']">
                  09
                </span>
              </div>
              <div>
                <span class="font-bold text-sm" style="font-size: .8rem ;">Reconocimiento al mérito</span>
              </div>
            </div>
          </NavLink>
        </li>
        <div class="flex justify-center">
          <hr class="vertical-hr">
        </div>
        <li class="relative px-0 py-0" :class="[route().current('registro-datos_personales') ? 'activado' : 'desactivado']">
          <NavLink :href="route('registro-datos_personales')" class="text-gray-500 px-0.5 py-1.5">
            <div class="flex">
              <div :class="[route().current('registro-datos_personales') ? 'div-activado' : 'div-desactivado']">
                <span :class="[route().current('registro-datos_personales') ? 'activado-nro' : 'desactivado-nro']">
                  10
                </span>
              </div>
              <div>
                <span class="font-bold text-sm" style="font-size: .8rem ;">Act. de ext. cultural proyección y responsabilidad social en la especialidad</span>
              </div>
            </div>
          </NavLink>
        </li>

        <div class="flex justify-center">
          <hr class="vertical-hr">
        </div>
        <li class="relative px-0 py-0" :class="[route().current('registro-datos_personales') ? 'activado' : 'desactivado']">
          <NavLink :href="route('registro-datos_personales')" class="text-gray-500 px-0.5 py-1.5">
            <div class="flex">
              <div :class="[route().current('registro-datos_personales') ? 'div-activado' : 'div-desactivado']">
                <span :class="[route().current('registro-datos_personales') ? 'activado-nro' : 'desactivado-nro']">
                  11
                </span>
              </div>
              <div>
                <span class="font-bold text-sm" style="font-size: .8rem ;">Bonificación</span>
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
  font-size: 1.2rem;
  color: white;
}
.desactivado-nro {
  font-weight: bold;
  font-size: 1.2rem;
  color: #bdbdbd;
}
.div-activado {
  margin-right: 0.5rem;
  background: #4a5568;
  min-width: 30px;
  width: 30px;
  height: 30px;
  display: flex;
  justify-content: center;
  align-items: center;
}
.div-desactivado {
  margin-right: 0.5rem;
  border: 2px solid #bdbdbd;
  width: 30px;
  min-width: 30px;
  height: 30px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.vertical-hr {
  display: none;  
  border: none;
  border-left: 2px solid #cdcdcd;
  height: 30px;
  margin: 0;
  margin-left: -220px;                 
  margin-top: -10px;
  margin-bottom: -20px;
}
</style>
