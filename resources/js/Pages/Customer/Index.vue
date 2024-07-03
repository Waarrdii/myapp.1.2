<template>
<Table :tableData="tableData" :headerColumn="headerColumn"></Table>
</template>

<script setup>
import { usePage } from '@inertiajs/vue3';
import Table from '@/Components/Table.vue';

const tableData = usePage().props.customers;
const headerColumn = Object.keys(tableData[0]);


</script>