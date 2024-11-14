import { defineStore } from 'pinia'
import { ref } from 'vue'

export const useShadingStore = defineStore('shading', () => {
  const isVisible = ref<boolean>(false)

  const toggleVisible = (): void => {
    isVisible.value = !isVisible.value
  }

  return { isVisible, toggleVisible }
})
