<template>
     <Head title="Dashboard" />
     <AuthenticatedLayout>
        <NavLink class="bg-blue-500 text-white px-2 py-1 rounded-md" :href="route('customer.create')" >
        <img :src="asset('images/add-user.svg')" alt="Add User">Add User
        </NavLink>
        <Table :tableData="tableData" :headerColumn="headerColumn" class="overflow-scroll relative w-5/6 h-[500px] mx-auto"></Table>
     </AuthenticatedLayout>
</template>

<script setup>
import Table from '@/Components/Table.vue';
import { Head } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import NavLink from '@/Components/NavLink.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';

// get data from route and sent to child component

import { usePage } from '@inertiajs/vue3';
const tableData = usePage().props.customers;
const headerColumn = Object.keys(tableData[0]);

// end get data from route and sent to child component

</script>