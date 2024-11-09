<template>
    <MainLayout>
        <div class="mt-8 flex flex-col gap-8"><CardComponent v-for="n in 5"></CardComponent></div>
    </MainLayout>
</template>

<script setup lang="ts">
import CardComponent from '@/Components/CardComponent.vue';
import MainLayout from '@/Layouts/MainLayout.vue';
</script>

<style scoped></style>
