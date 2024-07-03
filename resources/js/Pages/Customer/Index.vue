<template>
<Table :tableData="tableData" :headerColumn="headerColumn"></Table>
</template>

<script setup>
import Table from '@/Components/Table.vue';

// get data from route and sent to child component

import { usePage } from '@inertiajs/vue3';
const tableData = usePage().props.customers;
const headerColumn = Object.keys(tableData[0]);

// end get data from route and sent to child component

</script>