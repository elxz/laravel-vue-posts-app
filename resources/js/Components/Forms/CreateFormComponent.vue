<template>
  <form class="flex flex-col gap-8" @submit.prevent="create">
    <div class="w-2/4 flex flex-col gap-1">
      <label class="font-bold text-indigo-500">Название</label>
      <input
        type="text"
        class="rounded outline-none border-gray-300 bg-gray-100 focus:ring-0 focus:border-indigo-400"
        v-model="form.title"
      />
    </div>
    <div class="flex flex-col gap-1">
      <label class="font-bold text-indigo-500">Содержимое</label>
      <textarea
        class="rounded h-72 outline-none border-gray-300 bg-gray-100 focus:ring-0 focus:border-indigo-400"
        v-model="form.content"
      ></textarea>
    </div>
    <button
      class="border rounded-lg bg-indigo-500 text-white p-2 font-bold w-24 hover:bg-indigo-600 active:bg-indigo-500 transition-all"
    >
      Создать
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
    await form.post(route('posts.store'))
  } catch (err) {}
}
</script>

<style scoped></style>
