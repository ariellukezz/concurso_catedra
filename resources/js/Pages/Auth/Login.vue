<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <Head title="Login" />

    <GuestLayout>
        <Link href="/" class="flex items-center justify-center mt-3">
            <ApplicationLogo class="h-24 w-24 fill-current text-gray-500" style="width: 130px; height: 130px;" />
        </Link>
        <div class="flex justify-center font-bold" style="font-size:1.5rem; text-align: center;">
            Concurso de catedras
        </div>

        <div v-if="status" class="mb-4 text-sm font-medium text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            <div>
                <InputLabel for="dni" value="Dni" />
                <TextInput id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autofocus autocomplete="username" />
                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-3">
                <InputLabel for="password" value="Password" />
                <TextInput id="password" :type="mostrar == true?'text':'password'" class="mt-1 block w-full" v-model="form.password" required autocomplete="current-password" />
                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="mt-4 flex justify-between">
                <label class="inline-flex items-center">
                    <Checkbox name="remember" v-model:checked="mostrar" />
                    <span class="mx-2 text-sm text-gray-600">Mostrar</span> </label>

                <!-- <Link v-if="canResetPassword" :href="route('password.request')" class="text-sm text-gray-600 underline hover:text-gray-900">
                    Forgot your password?
                </Link> -->
            </div>

            <div class="mt-6 mb-2">
                <PrimaryButton class="w-full" style="background: blue;" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Ingresar al sistema
                </PrimaryButton>
            </div>
            <div>
                <Link href="/register" class="flex items-center justify-center mt-3 mb-5">
                    <PrimaryButton class="w-full" style="background: #e3e3e3; color:blue;" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Crear cuenta
                    </PrimaryButton>
                 </Link>
                
            </div>
        </form>
    </GuestLayout>
</template>

<script>
import { ref } from 'vue';
const mostrar = ref(false);

</script>
