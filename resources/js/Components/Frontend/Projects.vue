<template>
    <div class="container mx-auto">
        <nav class="mb-12 border-b-2 border-light-tail-100 dark:text-dark-tail-100">
            <ul class="flex flex-col lg:flex-row justify-evenly items-center">
                <li class="cursor-pointer capitalize m-4">
                    <button @click="filterProject('all')" class="flex text-center px-4 py-2 hover:text-light-tail-100 dark:text-dark-tail-100 bg-lime-300 hover:bg-red-400 text rounded-2xl" :class="[selectedSkill==='all'? 'text-light-tail-500 dark:text-dark-primary': ''] ">
                        All
                    </button>
                </li>
                <li class="cursor-pointer capitalize m-4 bg-lime-300 hover:bg-red-400 text rounded-2xl" v-for="projectSkill in skills.data" :key="projectSkill.id">
                    <button @click="filterProject(projectSkill.id)" class="flex text-center px-4 py-2 hover:text-light-tail-100 dark:text-dark-tail-100" :class="[selectedSkill===projectSkill.id? 'text-light-tail-500 dark:text-dark-primary': '']">
                        {{ projectSkill.name }}
                    </button>
                </li>
            </ul>
        </nav>
        <section class="grid gap-y-12 lg:grid-cols-3 lg:gap-8">
            <Project v-for="project in filteredProject" :key="project.id" :project="project"/>
        </section>
    </div>
</template>
<script setup>
import Project from './Project.vue';
import { ref } from 'vue';
const filteredProject = ref(props.projects.data)
const selectedSkill = ref('all')
const filterProject = (id)=>{
    if(id === 'all'){
        filteredProject.value = props.projects.data
    }else{
        filteredProject.value = props.projects.data.filter(project=>{
            return project.skill.id === id;
        })
        selectedSkill.value = id;
    }
}
const props = defineProps({
    skills:Object,
    projects:Object,
})
</script>