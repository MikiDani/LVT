<template>
  <div class="min-h-screen flex flex-col">

    <header class="bg-slate-600 text-white">
      <nav class="container mx-auto p-4 flex justify-between">
        <div class="text-xl font-bold">MySite</div>

        <ul class="flex gap-4">
          <li><RouterLink to="/" class="hover:text-sky-500">Start page</RouterLink></li>
          <li><RouterLink to="/info" class="hover:text-sky-300">Info</RouterLink></li>
          <li><RouterLink to="/contact" class="hover:text-sky-300">Contact</RouterLink></li>
        </ul>
      </nav>
    </header>

    <main class="flex-1 container mx-auto py-8">
      <RouterView />
    </main>

    <footer class="bg-slate-900 text-slate-200 text-center py-4 text-sm">
      © {{ new Date().getFullYear() }} MySite
    </footer>

  </div>
</template>

<script setup>
import { RouterLink, RouterView } from 'vue-router'
</script>
