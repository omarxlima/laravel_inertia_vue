<template>
  <AdminLayouts>
    <main class="p-4 md:ml-64 h-auto pt-20">

    </main>
  </AdminLayouts>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'
import AdminLayouts from './Components/AdminLayouts.vue'
import { Link } from '@inertiajs/vue3'


// initialize components based on data attribute selectors
onMounted(() => {
  initFlowbite();
})

</script>
