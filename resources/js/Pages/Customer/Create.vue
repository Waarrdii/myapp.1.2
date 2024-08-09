<template>

    <Head title="Add User" />

    <AuthenticatedLayout>
        <form @submit.prevent="submit" class="max-w-md mx-auto mt-3 py-4 px-2">
            <div class="grid grid-cols-6 gap-3">
                <div class="relative z-0 mb-5 group col-span-2">
                    <input type="text" name="email" id="email" class="input-form peer" v-model="data.customerId"
                        placeholder=" " required>
                    <label for="email" class="label-form">Customer ID</label>
                </div>
            </div>

            <button type="submit" @submit.prevent="submit"
                class="submit-button">Save</button>

        </form>


    </AuthenticatedLayout>

</template>

<script setup>
import { Head } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputForm from '@/Components/InputForm.vue';
import { reactive } from 'vue';
import { router } from '@inertiajs/vue3';

const data = reactive({
    customerId: '',
    nama: '',
    Alamat: '',
    Kota: '',
    Negara: '',
    KodePos: '',
    Kontak: '',
    Telephone: '',
    email: '',
    Type: '',
    Jenjang: '',
    Tingkatan: '',
    Kelas: '',
    Saldo: '',
})
const submit = () => {
    console.log(data);
    // router.post(route('customer.store',data));
};



</script>

<style lang="scss" scoped>
.input-form {
    @apply block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600
}

.label-form {
    @apply absolute -translate-y-8 scale-75 top-3 -z-10 origin-[0] text-sm text-gray-500 dark:text-gray-400 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-8 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600 peer-focus:dark:text-blue-500
}
.submit-button{
    @apply mt-5 focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800
}
</style>