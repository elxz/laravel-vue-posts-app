<template>
    <div class="m-8 px-16 py-8 bg-slate-50 rounded-xl">
        <HeaderComponent></HeaderComponent>
        <div><slot></slot></div>
    </div>
</template>

<script setup lang="ts">
import HeaderComponent from '@/Components/HeaderComponent.vue';
</script>

<style scoped></style>
