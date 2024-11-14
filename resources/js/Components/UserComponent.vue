<template>
  <div class="ml-16 flex justify-center items-center gap-4">
    <span class="mt-2 font-bold italic">{{ user }}</span>
    <img class="w-16" src="/images/anon-avatar.webp" alt="anon-avatar" />
  </div>
</template>

<script setup lang="ts">
defineProps<{
  user: number
}>()
</script>

<style scoped></style>
