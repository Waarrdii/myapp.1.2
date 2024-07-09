<template>
    <form @submit.prevent="$emit('submit')">
        <div class="grid gap-3 w-1/2 grid-cols-2">
            <div v-for="(label, index) in labelName" :key="index" v-show="label !== 'id' && label !== 'created_at' && label !== 'updated_at'  && label !== 'ischecked'" >
                <inputLabel :value="label" class="uppercase"></inputLabel>
                <input type="text" :name="label" :id="label"
                class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            
        </div>
    </form>
</template>

<script setup>
import inputLabel from '@/Components/InputLabel.vue';

const props = defineProps({
    labelName: Array,
})


</script>

<style lang="scss" scoped>

</style>