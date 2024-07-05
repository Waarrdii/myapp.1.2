<template>
    <div class="w-5/6 relative overflow-scroll">
        <table class="w-full text-nowrap text-left uppercase rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th v-for="column in headerColumn" 
                    :key="column" 
                    v-show="column !== 'id' && column !== 'created_at' && column !== 'updated_at'" 
                    scope="col" class="px-6 py-3">
                        {{ column }}
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="data in tableData"
                 :key="data.id" 
                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <Checkbox name="selectData" :checked="checked" v-model="data.ischecked"/>
                    <td v-for="column in headerColumn"
                    :key="column"
                    v-show="column !== 'id' && column !== 'created_at' && column !== 'updated_at'" 
                    scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{data[column]}}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script setup>
// get data from index
import { defineProps,ref } from 'vue';

const props = defineProps({
    tableData: Array,
    headerColumn: Array
});
// end get data from index

// checkbox component
import Checkbox from './Checkbox.vue';
const checked = ref(false)

</script>