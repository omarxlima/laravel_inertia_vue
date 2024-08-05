<template>
    <AdminLayouts>
        <ProductList>
            
        </ProductList>
        
    </AdminLayouts>
    
</template>


<script setup>

import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'
import AdminLayouts from '../Components/AdminLayouts.vue'
import ProductList from './ProductList.vue'
import { Link } from '@inertiajs/vue3'


// initialize components based on data attribute selectors
onMounted(() => {
  initFlowbite();
})

</script>
