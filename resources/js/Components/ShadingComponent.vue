<template>
  <div
    v-if="shading.isVisible"
    @click.self="shading.toggleVisible()"
    class="fixed flex top-0 left-0 h-full w-full bg-black z-10 bg-opacity-75"
  >
    <slot></slot>
  </div>
</template>

<script setup lang="ts">
import { useShadingStore } from '@/Stores/shadingStore'

const shading = useShadingStore()
</script>

<style scoped></style>
