<template>
  <Head title="Show" />
  <MainLayout>
    <div class="flex items-center justify-between gap-8 mt-8 flex-nowrap">
      <h2 class="font-bold text-3xl break-words">{{ post.title }}</h2>
      <UserComponent :user="post.user_id"></UserComponent>
    </div>
    <p class="mt-8 text-xl text-pretty">{{ post.content }}</p></MainLayout
  >
</template>

<script setup lang="ts">
import { Head } from '@inertiajs/vue3'

import type IPost from '@/Interfaces/IPost'
import MainLayout from '@/Layouts/MainLayout.vue'
import UserComponent from '@/Components/UserComponent.vue'

defineProps<{
  post: IPost
}>()
</script>

<style scoped></style>
