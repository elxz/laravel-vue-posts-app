<template>
  <Head title="Index" />
  <ModalComponent>
    <CreateFormComponent></CreateFormComponent>
  </ModalComponent>
  <MainLayout>
    <div class="mt-8">
      <div class="flex justify-between items-center">
        <button
          class="h-10 w-10 border rounded font-bold text-2xl text-white bg-indigo-500 hover:bg-indigo-600 active:bg-indigo-500 transition-all"
          @click="shading.toggleVisible"
        >
          +
        </button>
        <input
          class="rounded outline-none border-gray-300 bg-gray-100 focus:ring-0 focus:border-indigo-400 w-72"
          type="text"
          placeholder="Search..."
        />
      </div>
      <div class="mt-8 flex flex-col gap-8">
        <CardComponent
          v-for="post in posts"
          :key="post.id"
          :id="post.id"
          :title="post.title"
          :content="post.content"
          :user_id="post.user_id"
        ></CardComponent>
      </div>
    </div>
  </MainLayout>
</template>

<script setup lang="ts">
import { Head } from '@inertiajs/vue3'
import { useShadingStore } from '@/Stores/shadingStore'

import MainLayout from '@/Layouts/MainLayout.vue'
import CardComponent from '@/Components/CardComponent.vue'
import ModalComponent from '@/Components/ModalComponent.vue'
import CreateFormComponent from '@/Components/Forms/CreateFormComponent.vue'
import type IPost from '@/Interfaces/IPost'

const shading = useShadingStore()

defineProps<{
  posts: IPost[]
}>()
</script>

<style scoped></style>
