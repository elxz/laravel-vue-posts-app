<template>
  <div class="pb-8 flex items-center border-b-2 border-gray-200">
    <Link :href="route('posts.index')">
      <img class="w-16" src="/images/logo.webp" alt="logo" />
    </Link>
    <h1 class="ml-2 text-2xl">Vue POSTS</h1>
  </div>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3'
</script>

<style scoped></style>
