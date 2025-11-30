import { createRouter, createWebHistory } from 'vue-router'
import StartPage from '../views/StartPage.vue'
import InfoPage from '../views/InfoPage.vue'
import ContactPage from '../views/ContactPage.vue'

const routes = [
  { path: '/', name: 'start', component: StartPage },
  { path: '/info', name: 'info', component: InfoPage },
  { path: '/contact', name: 'contact', component: ContactPage }
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router