<template>
    <ul>
        <li v-for="customer in tableData" :key="customer.id">
            {{ customer.nama }}
        </li>
        <li v-for="header in headerColumn" :key="header.id">
            {{ header }}
        </li>
    </ul>
</template>

<script setup>
// get data from index
import { defineProps } from 'vue';

const props = defineProps({
    tableData: Array,
    headerColumn: Array
});
// end get data from index


</script>