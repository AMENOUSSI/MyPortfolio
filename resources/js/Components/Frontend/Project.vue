<template>
    <Link :href="project.project_url" class="group flex flex-col items-center text-center cursor-pointer"
    v-motion="'custom'" :initial="{ opacity: 0, y: 100 }"
            :visible="{ opacity: 1, y: 0 }" :variants="{ custom: { scale: 2 } }">
        <div class="mb-6">
            <img class="rounded-2xl h-56" :src="project.image" alt="">
        </div>
        <span class="group-hover.text-light-tail-500 capitalize text-accent text-sm mb-3">
            {{ project.skill.name }}
        </span>
        <h3 class="group-hover.text-light-tail-500 capitalize mb-3 font-semibold">
            {{ project.name }}
        </h3>
    </Link>
</template>
<script setup>
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    
    project:Object,
})
</script>