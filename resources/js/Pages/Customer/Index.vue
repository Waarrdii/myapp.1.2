<template>
     <Head title="Dashboard" />
     <AuthenticatedLayout>
        <div class="mx-5 my-5">
         <NavLink class="bg-blue-500 sticky top-0 z-10 text-white px-2 py-1 rounded-md h-8 w-12" :href="route('customer.create')" >
        <AddUser/>
        </NavLink>
        <div class="relative overflow-auto w-full h-[500px] rounded-md">
         <Table :tableData="tableData" :headerColumn="headerColumn"></Table>
        </div>
        </div>
        
     </AuthenticatedLayout>
</template>

<script setup>
import Table from '@/Components/Table.vue';
import { Head } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import NavLink from '@/Components/NavLink.vue';
import AddUser from '@/Components/Icons/AddUser.vue';

// get data from route and sent to child component

import { usePage } from '@inertiajs/vue3';
const tableData = usePage().props.customers;
const headerColumn = Object.keys(tableData[0]);

// end get data from route and sent to child component

</script>