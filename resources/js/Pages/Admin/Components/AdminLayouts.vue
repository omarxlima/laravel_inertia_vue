<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'
import Navbar from './Navbar.vue'
import Sidebar from './Sidebar.vue'
import { Link } from '@inertiajs/vue3'



// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
})

</script>



<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="antialiased bg-gray-50 dark:bg-gray-900">

            <!-- Navbar inicio -->
             <Navbar/>

            <!-- Navbar fim -->
             
            <!-- Sidebar inicio-->
            <Sidebar/>
            <!-- Sidebar fim-->




         
        </div>

        <!-- <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">You're logged in!</div>
        </div>
    </div>
</div> -->
    </AuthenticatedLayout>
</template>
