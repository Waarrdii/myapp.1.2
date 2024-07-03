<template>
    <Table></Table>
</template>

<script setup>
import Table from '../../Components/Table.vue'

const dataTable = defineProps({
    customers:Array,
    })

</script>

<style lang="scss" scoped>

</style>