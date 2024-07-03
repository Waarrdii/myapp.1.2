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
import { defineProps } from 'vue';

const props = defineProps({
    tableData: Array,
    headerColumn: Array
});

</script>