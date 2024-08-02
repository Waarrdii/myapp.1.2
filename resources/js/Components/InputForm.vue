<template>
    <div class="relative z-0 mb-5 group">
        <input 
        :type="type" 
        :name="name" 
        :id="id"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            placeholder=" " required>
        <label 
        :for="id"
            class="absolute -translate-y-8 scale-75 top-3 -z-10 origin-[0] text-sm text-gray-500 dark:text-gray-400 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-8 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600 peer-focus:dark:text-blue-500">{{ labelText }}</label>
    </div>
</template>

<script setup>

defineProps({
    type: String,
    name: String,
    id: String,
    formData: Object,
    labelText: String
})

</script>

<style lang="scss" scoped></style>