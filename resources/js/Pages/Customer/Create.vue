<template>

    <Head title="Add User" />

    <AuthenticatedLayout>
        <form @submit.prevent="submit" class="max-w-md mx-auto mt-3 py-4 px-2">
            <div class="grid grid-cols-6 gap-3">
                <InputForm type="text" name="customerId" id="customerId" labelText="Customer ID" class="col-span-2" v-model="data.customerId" />
                <InputForm type="text" name="nama" id="nama" labelText="Nama" class="col-span-4" v-model="data.nama" />
                <InputForm type="text" name="Alamat" id="Alamat" labelText="Alamat" class="col-span-6" v-model="data.Alamat" />
                <InputForm type="text" name="Kota" id="Kota" labelText="Kota" class="col-span-3" v-model="data.Kota" />
                <InputForm type="text" name="Negara" id="Negara" labelText="Negara" class="col-span-2" v-model="data.Negara" />
                <InputForm type="text" name="KodePos" id="KodePos" labelText="Kode Pos" v-model="data.KodePos" />
                <InputForm type="text" name="Kontak" id="Kontak" labelText="Kontak" class="col-span-3" v-model="data.Kontak" />
                <InputForm type="text" name="Telephone" id="Telephone" labelText="Telephone" class="col-span-3" v-model="data.Telephone" />
                <InputForm type="email" name="email" id="email" labelText="Email" class="col-span-3" v-model="data.email" />
                <InputForm type="text" name="Type" id="Type" labelText="Type" class="col-span-3" v-model="data.Type" />
                <InputForm type="text" name="Jenjang" id="Jenjang" labelText="Jenjang" class="col-span-2" v-model="data.Jenjang" />
                <InputForm type="text" name="Tingkatan" id="Tingkatan" labelText="Tingkatan" class="col-span-2" v-model="data.Tingkatan" />
                <InputForm type="text" name="Kelas" id="Kelas" labelText="Kelas" class="col-span-2" v-model="data.Kelas" />
                <InputForm type="number" name="Saldo" id="Saldo" labelText="Saldo" class="col-span-3" v-model="data.Saldo" />
            </div>

            <button type="submit"
                class="mt-5 focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save</button>

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

<style lang="scss" scoped></style>