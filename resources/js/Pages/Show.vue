<template>
  <Head title="Show" />
  <ModalComponent>
    <EditFormComponent
      :id="post.id"
      :title="post.title"
      :content="post.content"
    ></EditFormComponent>
  </ModalComponent>
  <MainLayout>
    <div class="flex items-center justify-between gap-8 mt-8 flex-nowrap">
      <h2 class="w-10/12 font-bold text-2xl break-words">{{ post.title }}</h2>
      <UserComponent :user="post.user_id"></UserComponent>
    </div>
    <p class="mt-8 text-xl text-pretty">{{ post.content }}</p>
    <div class="flex gap-4 mt-8">
      <button
        class="border rounded py-2 px-4 bg-indigo-500 text-white font-bold cursor-pointer hover:bg-indigo-600 active:bg-indigo-500 transition-all"
        @click="shading.toggleVisible()"
      >
        Edit
      </button>
      <button
        class="border rounded py-2 px-4 bg-red-500 text-white font-bold cursor-pointer hover:bg-red-600 active:bg-red-500 transition-all"
        @click="destroy"
      >
        Delete
      </button>
    </div>
  </MainLayout>
</template>

<script setup lang="ts">
import { Head, useForm } from '@inertiajs/vue3'

import type IPost from '@/Interfaces/IPost'
import MainLayout from '@/Layouts/MainLayout.vue'
import UserComponent from '@/Components/UserComponent.vue'
import ModalComponent from '@/Components/ModalComponent.vue'
import EditFormComponent from '@/Components/Forms/EditFormComponent.vue'
import { useShadingStore } from '@/Stores/shadingStore'

const props = defineProps<{
  post: IPost
}>()

const form = useForm({})

const shading = useShadingStore()

const destroy = async (): Promise<void> => {
  try {
    await form.delete(route('posts.destroy', props.post.id), {
      onSuccess: () => {
        alert('Post has been successfully deleted!')
      }
    })
  } catch (error) {
    alert('Error when sending data to the server')
  }
}
</script>

<style scoped></style>
