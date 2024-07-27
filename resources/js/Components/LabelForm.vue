<template>
<label :for="inputName" class="peer-focus:font-medium absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform translate-y-6 -top-4 z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-75 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-1 cursor-text">{{ TextLabel }}</label>
</template>

<script setup>

defineProps({
    TextLabel: String,
    inputName: String,
})
</script>

<style lang="scss" scoped>

</style>