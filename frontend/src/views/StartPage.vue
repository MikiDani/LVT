<template>
  <div class="p-8 space-y-4">
    <h1 class="text-3xl font-bold">Start Page</h1>
    <button v-on:click="getLorem" class="px-4 py-2 bg-sky-600 text-white rounded hover:bg-sky-700">Load Lorem Ipsum</button>
    <div v-if="loremText" class="mt-4 p-4 bg-slate-200 rounded">{{ loremText }}</div>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import axios from 'axios'

const loremText = ref('')

const getLorem = async () => {
  console.log(loremText.value)
  
  if (loremText.value) {
    loremText.value = ''
  } else {
    const response = await axios.get('http://127.0.0.1:8001/api/lorem')
    console.log(response)
    loremText.value = response.data.text
  }
}
</script>
