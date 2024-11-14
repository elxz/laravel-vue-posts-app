<template>
  <Link :href="route('posts.index')">
    <div class="pb-8 flex items-center border-b-2 border-gray-200">
      <img class="w-16" src="/images/logo.webp" alt="logo" />
      <h1 class="ml-2 text-2xl">Vue POSTS</h1>
    </div>
  </Link>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3'
</script>

<style scoped></style>
