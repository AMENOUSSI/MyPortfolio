<script setup>
import { Head, Link } from '@inertiajs/vue3';
import FrontendLayout from '@/Layouts/Frontend.vue';
import Hero from '../Components/Frontend/Hero.vue';
import promote from '../Components/Frontend/promote.vue';
import About from '../Components/Frontend/About.vue';
import Skills from '@/Components/Frontend/Skills.vue';
import Portfolio from '@/Components/Frontend/Portfolio.vue';
import Services from '@/Components/Frontend/Services.vue';
import Contact from '@/Components/Frontend/Contact.vue';

defineProps({
    skills:Object,
    projects:Object,
})


</script>

<template>
    <Head title="Welcome to my portfolio" />
    <FrontendLayout>
        <!-- Hero primary -->
        <Hero />
        <!-- Promote -->
        <promote/>
        <!-- About secondary -->
        <About/>
        <!-- skill tail-100 -->
        <Skills :skills="skills"/>
        <!-- Portfolio primary -->
        <Portfolio :skills="skills" :projects="projects"/>
        <!-- Services secondary -->
        <Services/>
        <!-- Contact primary -->
        <Contact/>
    </FrontendLayout>

    
</template>

<style>
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}
@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>
