<template>
    <Head title="Add User" />

    <AuthenticatedLayout>
        <form action="" class="max-w-md mx-auto mt-3 py-4 px-2">
            <InputForm type="text" name="customerId" id="customerId" labelText="Customer ID" />
            <InputForm type="text" name="nama" id="nama" labelText="Nama" />
            <InputForm type="email" name="email" id="email" labelText="Email" />
            <InputForm type="text" name="Type" id="Type" labelText="Type"/>
            <InputForm type="text" name="Jenjang" id="Jenjang" labelText="Jenjang"/>
            <InputForm type="text" name="Tingkatan" id="Tingkatan" labelText="Tingkatan"/>
            <InputForm type="text" name="Tingkatan" id="Tingkatan" labelText="Tingkatan"/>
            <InputForm type="text" name="Tingkatan" id="Tingkatan" labelText="Tingkatan"/>
            <InputForm type="text" name="Tingkatan" id="Tingkatan" labelText="Tingkatan"/>
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