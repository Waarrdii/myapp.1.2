<template>
    create data customer akan disini
   <Form :labelName="labelName"></Form>
</template>

<script setup>
import Form from '@/Components/Form.vue';
import { useForm, usePage } from '@inertiajs/vue3';

const dataForm = usePage().props.customers;
const labelName = Object.keys(dataForm[0]);
</script>

<style lang="scss" scoped>

</style>