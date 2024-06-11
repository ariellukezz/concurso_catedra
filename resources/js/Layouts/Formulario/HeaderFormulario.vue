<template>
  <a-layout-header class="bg-[#1a2843] flex items-center justify-between" style="height: 54px; color: white; z-index: 2;">
    <a-link :href="route('dashboard')" class="flex items-center" style="width: 230px; color: white;">
      <div class="flex items-center" style="margin-top: -10px;">
        <div class="ml-2 mr-2" style="width: 30px;">
          <img src="../../../../public/imagenes/logotiny.png" alt="">
        </div>
        <div class="hidden md:block sm:block lg:block mt-2">
          <span style="font-size: 2.1rem; letter-spacing: .000rem; font-family: 'Times New Roman', Times, serif;">UNA-PUNO</span>
        </div>

      </div>
    </a-link>
    <div class="flex items-center">
      <a-button type="link" class="md:hidden" @click="$page.props.showingMobileMenu = !$page.props.showingMobileMenu" style="color: white;">
        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
          <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
        </svg>
      </a-button>
      <a-dropdown v-if="usuario.usuario != null">
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
        <div class="flex items-center cursor-pointer">
          <div class="text-right mr-2">
            <div class="font-bold" style="font-size: 0.8rem; color: white;">{{ usuario.usuario.nombres }} {{ usuario.usuario.paterno }}</div>
            <div class="uppercase truncate" style="font-size: 0.7rem; max-width: 200px; color: white;">{{ usuario.usuario.rol }}</div>
          </div>
          <a-avatar>
            <a-icon type="user" class="ml-2" />            
          </a-avatar>
          <a-icon type="down" class="ml-2" />
        </div>
      </a-dropdown>
    </div>
  </a-layout-header>
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
.logo-pos {
  margin-top: 10px;
}
@media only screen and (max-width: 767px) {
  .nomb {
    display: none;
  }
  .logo-pos {
    margin-top: 20px;
  }
}
</style>
