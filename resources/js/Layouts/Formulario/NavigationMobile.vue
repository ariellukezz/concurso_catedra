<template>
  <transition
      enter-active-class="transition ease-in-out duration-150"
      enter-from-class="opacity-0"
      enter-to-class="opacity-100"
      leave-active-class="transition ease-in-out duration-150"
      leave-from-class="opacity-100"
      leave-to-class="opacity-0">
    <div v-show="$page.props.showingMobileMenu" class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
  </transition>
  <transition
      enter-active-class="transition ease-in-out duration-150"
      enter-from-class="opacity-0 transform -translate-x-20"
      enter-to-class="opacity-100"
      leave-active-class="transition ease-in-out duration-150"
      leave-from-class="opacity-100"
      leave-to-class="opacity-0 transform -translate-x-20">
    <aside v-show="$page.props.showingMobileMenu" class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-0 overflow-y-auto bg-white md:hidden">
      <div class="py-4 text-gray-500 dark:text-gray-400">
        <!-- <Link class="ml-4 text-lg font-bold text-gray-800">
        INICIO
      </Link> -->


      <div class="flex py-0 px-3" style="color: black; background: white;">
        <div class="container lg:px-12 mx-auto" style="width: 100%; display: flex;">
          <div>
            <img src="../../../assets/imagenes/unap.png" width="40px">
          </div>
          <div class="ml-1 mt-0" style="margin-top: 7px; font-family: 'Times New Roman', Times, serif; text-transform: uppercase;">
            <div style="font-size: .9rem;">Concurso público de</div>
            <div style="margin-top: -5px; font-size: .9rem;">cátedra 2024-II</div>
          </div>
        </div>
      </div>


        <ul class="mt-6">
          <li class="relative px-4 py-1">
            <ResponsiveNavLink :href="route('inicio')" :class="[route().current('inicio')? 'activado':'']">
              <template #icon>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                </svg>
              </template>
              Inicio
            </ResponsiveNavLink>
          </li>

          <li class="relative px-4 py-1">
            <ResponsiveNavLink :href="route('cv')" :class="[route().current('cv')? 'activado':'']">
              <template #icon>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                </svg>
              </template>
              Inscribirme
            </ResponsiveNavLink>
          </li>

        </ul>
      </div>
    </aside>
  </transition>
</template>

<script setup>
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue'
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue'

let showingTwoLevelMenu = ref(false)
</script>

<style scoped>
.activado{
  background: red;
  background-color: #00000028;
  /* border-left: 3px solid #dd02b9; */
  /* background-color: #3f484d; */
}

.activado span{ color: #ffffff; }
</style>