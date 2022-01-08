import { createRouter, createWebHistory } from 'vue-router';
import Welcome from './pages/Welcome';
import About from './pages/About';

const routes = [
    { path: '/', name: "welcome", component: Welcome },
    { path: '/about', name: "about", component: About },
]

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
})

export default router;
