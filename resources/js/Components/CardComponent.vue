<template>
  <Link :href="route('posts.show', id)">
    <div
      class="px-8 py-4 flex justify-between items-center border rounded-xl cursor-pointer hover:-translate-y-1 hover:shadow-md transition-all"
    >
      <h3 class="font-bold text-xl break-words">{{ title }}</h3>
      <UserComponent :user="user_id"></UserComponent>
    </div>
  </Link>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3'
import UserComponent from './UserComponent.vue'

defineProps<{
  id: number
  title: string
  content: string
  user_id: number
}>()
</script>

<style scoped></style>
