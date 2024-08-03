<template>
    <Head title="Add User" />

    <AuthenticatedLayout>
        <form action="" class="max-w-md mx-auto mt-3 py-4 px-2 grid grid-cols-6 gap-3">
            <InputForm type="text" name="customerId" id="customerId" labelText="Customer ID" class="col-span-2"/>
            <InputForm type="text" name="nama" id="nama" labelText="Nama" class="col-span-4"/>
            <InputForm type="text" name="Alamat" id="Alamat" labelText="Alamat" class="col-span-6"/>
            <InputForm type="text" name="Kota" id="Kota" labelText="Kota" class="col-span-3"/>
            <InputForm type="text" name="Negara" id="Negara" labelText="Negara" class="col-span-2"/>
            <InputForm type="text" name="KodePos" id="KodePos" labelText="Kode Pos"/>
            <InputForm type="text" name="Kontak" id="Kontak" labelText="Kontak" class="col-span-3"/>
            <InputForm type="text" name="Telephone" id="Telephone" labelText="Telephone" class="col-span-3"/>
            <InputForm type="email" name="email" id="email" labelText="Email"  class="col-span-3"/>
            <InputForm type="text" name="Type" id="Type" labelText="Type" class="col-span-3"/>
            <InputForm type="text" name="Jenjang" id="Jenjang" labelText="Jenjang" class="col-span-2"/>
            <InputForm type="text" name="Tingkatan" id="Tingkatan" labelText="Tingkatan" class="col-span-2"/>
            <InputForm type="text" name="Kelas" id="Kelas" labelText="Kelas" class="col-span-2"/>
            <InputForm type="number" name="Saldo" id="Saldo" labelText="Saldo" class="col-span-3"/>
           
        </form>
    </AuthenticatedLayout>

</template>

<script setup>
import { Head } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputForm from '@/Components/InputForm.vue';

</script>

<style lang="scss" scoped>

</style>