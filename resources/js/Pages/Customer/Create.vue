<template>
    <Head title="Add User" />

    <AuthenticatedLayout>
        <form action="" class="max-w-md mx-auto mt-3 bg-white py-4 px-2">
            <div class="relative z-0 w-full mb-5 group">
            <InputForm type="email" name="floating_email" id="floating_email" />
            <LabelForm inputName="floating_email" TextLabel="Email"/>
            </div>
            
        </form>
    </AuthenticatedLayout>

</template>

<script setup>
import { Head } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputForm from '@/Components/InputForm.vue';
import LabelForm from '@/Components/LabelForm.vue';

</script>

<style lang="scss" scoped>

</style>