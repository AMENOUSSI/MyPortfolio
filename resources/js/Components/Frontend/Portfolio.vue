<script setup>
import Projects from './Projects.vue';
defineProps({
    skills:Object,
    projects:Object,
})
</script>
<template>
    <section id="portfolio" class="section bg-light-primary dark:bg-dark-primary min-h-[1400px]">
        <div class="container mx-auto"
        v-motion="'custom'" :initial="{ opacity: 0, y: 100 }"
            :visible="{ opacity: 1, y: 0 }" :variants="{ custom: { scale: 2 } }">
            <div class="flex flex-col items-center text-center">
                <h1 class="section-title items-center">My latest work</h1>

                <p class="subtitle">Bellow are my skills and some of my works.  
                !</p>
            </div>
        </div>
        <Projects :skills="skills" :projects="projects"
        />
    </section>
</template>