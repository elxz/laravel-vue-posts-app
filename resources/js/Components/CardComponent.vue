<template>
  <Link :href="route('posts.show', 1)">
    <div
      class="p-4 flex justify-between border border-orange-200 rounded-xl cursor-pointer hover:-translate-y-1 hover:shadow-md hover:shadow-orange-300 transition-all"
    >
      <div class="flex flex-col">
        <h3 class="font-bold text-xl">Заголовок поста</h3>
        <p class="mt-2 text-lg">Контент поста</p>
        <span class="mt-2 text-sm text-gray-500">Теги</span>
      </div>
      <div class="ml-16 flex flex-col justify-center items-center">
        <img class="w-16" src="/images/anon-avatar.webp" alt="anon-avatar" />
        <span class="mt-2 font-bold italic">Имя Фамилия</span>
      </div>
    </div>
  </Link>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3'
</script>

<style scoped></style>
