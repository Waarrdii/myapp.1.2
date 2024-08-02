<template>
    <Head title="Add User" />

    <AuthenticatedLayout>
        <form action="" class="max-w-md mx-auto mt-3 py-4 px-2 grid grid-cols-3 gap-3">
            <InputForm type="text" name="customerId" id="customerId" labelText="Customer ID"/>
            <InputForm type="text" name="nama" id="nama" labelText="Nama" class="col-span-2"/>
            <InputForm type="text" name="Alamat" id="Alamat" labelText="Alamat" class="col-span-3"/>
            <InputForm type="text" name="Kota" id="Kota" labelText="Kota" />
            <InputForm type="text" name="Negara" id="Negara" labelText="Negara"/>
            <InputForm type="text" name="KodePos" id="KodePos" labelText="Kode Pos"/>
            <InputForm type="text" name="Kontak" id="Kontak" labelText="Kontak" />
            <InputForm type="text" name="Telephone" id="Telephone" labelText="Telephone"/>
            <InputForm type="email" name="email" id="email" labelText="Email"  />
            <InputForm type="text" name="Type" id="Type" labelText="Type"/>
            <InputForm type="text" name="Jenjang" id="Jenjang" labelText="Jenjang"/>
            <InputForm type="text" name="Tingkatan" id="Tingkatan" labelText="Tingkatan"/>
            <InputForm type="text" name="Kelas" id="Kelas" labelText="Kelas"/>
            <InputForm type="number" name="Saldo" id="Saldo" labelText="Saldo"/>
           
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