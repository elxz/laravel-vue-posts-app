<template>
  <form class="flex flex-col gap-8" @submit.prevent="create">
    <div class="flex flex-col gap-1">
      <label class="font-bold text-indigo-500" :class="{ 'text-red-500': form.errors.title }"
        >Title</label
      >
      <input
        type="text"
        class="w-2/4 rounded outline-none border-gray-300 bg-gray-100 focus:ring-0 focus:border-indigo-400"
        :class="{ 'bg-red-200 border-red-400': form.errors.title }"
        v-model="form.title"
      />
      <span v-show="form.errors.title" class="text-red-500">{{ form.errors.title }}</span>
    </div>
    <div class="flex flex-col gap-1">
      <label class="font-bold text-indigo-500" :class="{ 'text-red-500': form.errors.content }"
        >Content</label
      >
      <textarea
        class="rounded h-72 outline-none border-gray-300 bg-gray-100 focus:ring-0 focus:border-indigo-400"
        :class="{ 'bg-red-200 border-red-400': form.errors.content }"
        v-model="form.content"
      ></textarea>
      <span v-show="form.errors.content" class="text-red-500">{{ form.errors.content }}</span>
    </div>
    <button
      class="border rounded-lg bg-indigo-500 text-white p-2 font-bold w-24 hover:bg-indigo-600 active:bg-indigo-500 transition-all"
      :disabled="form.processing"
    >
      Create
    </button>
  </form>
</template>

<script setup lang="ts">
import { useForm, InertiaForm } from '@inertiajs/vue3'

const form: InertiaForm<{ title: string; content: string; user_id: number }> = useForm({
  title: '',
  content: '',
  user_id: 1
})

const create = async (): Promise<void> => {
  try {
    await form.post(route('posts.store'), {
      onSuccess: (response) => {
        form.reset()

        alert('Post has been successfully created!')
      }
    })
  } catch (error) {
    alert('Error when sending data to the server')
  }
}
</script>

<style scoped></style>
