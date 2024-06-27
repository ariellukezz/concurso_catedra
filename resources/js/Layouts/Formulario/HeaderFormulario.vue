<template>
  <a-layout-header class="flex items-center justify-between" style="height: 34px; z-index: 2; background: #008DC1; color:white;">
    <div class="container lg:px-12 mx-auto" style="width: 100%; display: flex;">
      <div class="flex" style="width: 100%;" >
        <a-link :href="route('inicio')" class="flex items-center">
        <div class="flex items-center container-logo">
          <!-- <div class="ml-2 mr-2" style="width: 30px;">
            <img src="../../../../public/imagenes/logotiny.png" alt="">
          </div> -->

          <div class="flex mt-2">
            <div class="flex menux">
              <Link :href="route('inicio')" :class="[route().current('inicio') ? 'item-header-activado' : 'item-header-desactivado']">
                <div> Inicio</div>
              </Link>
              <Link :href="route('cv')" :class="[route().current('login') ? 'item-header-activado' : 'item-header-desactivado']">
                <div><span>Resultados</span> </div> 
              </Link>
              <Link v-if="usuario.usuario" :href="route('cv')" :class="[route().current('cv') ? 'item-header-activado' : 'item-header-desactivado']">
                <div> Inscribirme</div>
              </Link>
            </div>
          </div> 
          <!-- <div class="hidden md:block sm:block lg:block mt-2">
            <span style="font-size: 1.6rem; letter-spacing: .000rem; font-family: 'Times New Roman', Times, serif;">UNA-PUNO</span>
          </div> -->

        </div>
      </a-link>

      <div class="flex items-center block md:hidden sm:hidden lg:hidden mt-2" style="margin-top: -4px;">
        <a-button type="link" class="md:hidden" @click="$page.props.showingMobileMenu = !$page.props.showingMobileMenu" style="color: white;">
          <svg class="w-5 h-5" fill="white" viewBox="0 0 24 24" aria-hidden="true">
            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          </svg>
        </a-button>
      </div>
      </div>
      <div v-if="usuario.usuario">
        <a-dropdown ">
          <template #overlay>
            <a-menu style="min-width: 200px;">
              <a-menu-item @click="showChangePasswordModal">
                <a-icon type="setting" />
                <div class="ml-3">
                  <span>Cambiar contraseña</span>
                </div>

              </a-menu-item>
              <a-menu-item>
                <a-icon type="logout" />
                <Link href="logout" method="post" :class="classes">
                    <slot name="icon" />
                    <span class="mx-3">
                        Salir
                    </span>
                </Link>
              </a-menu-item>
            </a-menu>
          </template>
          <div class="flex items-center cursor-pointer" style="width: 200px; justify-content: right;">

            <div v-if="usuario.usuario.nombres" class="text-right mr-2">
              <div class="font-bold" style="font-size: 0.8rem; color: white;">{{ usuario.usuario.nombres }}</div>
            </div>

            <div v-else class="text-right mr-2">
              <div class="font-bold" style="font-size: 0.8rem; color: white;">{{ usuario.usuario.email }}</div>
            </div>
            <a-avatar>
              <a-icon type="user" class="ml-2" />            
            </a-avatar>
            <a-icon type="down" class="ml-2" />
          </div>
        </a-dropdown>
      </div> 
      <div class="flex mt-0" v-else>
        <div class="flex menux">
            <Link :href="route('cv')" :class="[route().current('cv') ? 'item-header-activado' : 'item-header-desactivado']">
              <div> Inscribirme</div>
            </Link>
            <Link :href="route('register')" :class="[route().current('register') ? 'item-header-activado' : 'item-header-desactivado']">
              <div class="flex" style="display: flex !important;" > <span></span> Registrarme </div> 
            </Link>
            <Link :href="route('login')" :class="[route().current('login') ? 'item-header-activado' : 'item-header-desactivado']">
              <div> Ingresar</div>
            </Link>
        </div>
      </div> 
    </div>

    
  </a-layout-header>
<div class="flex py-2" style="color:black; background: white;">
  <div class="container lg:px-12 mx-auto" style="width: 100%; display: flex;">
		<div>
			<img src="../../../assets/imagenes/unap.png" width="50px">
		</div>
		<div class="ml-3 mt-0" style="margin-top: 9px; font-family: 'Times New Roman', Times, serif; text-transform: uppercase;">
			<div><span style="font-size: 1.1rem;">Concurso público de</span></div>
			<div style="margin-top: -8px; font-size: 1.1rem;"><span>catedra 2024-II</span></div>
		</div>
	</div>
</div>
  <a-modal v-model:visible="modalContra" title="Cambiar contraseña">
    <label>Nueva contraseña</label>
    <a-input v-model="contra" type="password" />
    <template #footer>
      <a-button type="primary" @click="saveContra">Cambiar contraseña</a-button>
    </template>
  </a-modal>
</template>

<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';
import { message } from 'ant-design-vue'; 

const usuario = defineProps(['usuario']);
const modalContra = ref(false);
const contra = ref("");

const showChangePasswordModal = () => {
  modalContra.value = true;
};

const saveContra = async () => {
  try {
    let res = await axios.post("/save-contrasenia", { contra: contra.value });
    modalContra.value = false;
    message.success(res.data.mensaje);
  } catch (error) {
    message.error("Error al cambiar la contraseña");
  }
};

</script>

<style scoped>
.container-logo{
  margin-top: -7px;
}
.item-header-activado{
  background: white; 
  padding: 0px 20px; 
  display: flex; 
  align-items: center; 
  color: black;
}
.item-header-desactivado{
  background: #008DC1; 
  padding: 0px 20px; 
  display: flex; 
  align-items: center; 
  color: white;
}

.menux{ width: 330px; height: 34px; text-align: right; font-size: 0.9rem; }

@media only screen and (max-width: 639px) {
  .nomb { display: none; }
  .menux{display: none; }
  .container-logo{ margin-right: -14px; }
}
</style>
