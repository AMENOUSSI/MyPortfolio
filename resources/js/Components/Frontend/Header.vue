<template>
    <div>

        <nav class="fixed z-20 w-full bg-light-primary border-gray-200 dark:bg-dark-primary dark:border-gray-700" :class="{'bg-light-primary dark:bg-dark-primary':scrollBg, 'bg-white dark:bg-red-500':scrollBg}" >
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="#" class="flex items-center">
                    <img src="#" class="h-8 mr-3" alt="" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
                </a>
                <button @click="showMobileMenu = !showMobileMenu" data-collapse-toggle="navbar-dropdown" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-dropdown" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class=" w-full md:block md:w-auto"
                :class="{hidden:showMobileMenu}"
                id="navbar-dropdown">
                    <ul
                        class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-light-tail-500 dark:border-dark-navy-100 rounded-lg  md:flex-row md:space-x-8 md:mt-0 md:border-0    ">
                        <li v-for="navigation in navigation" :key="navigation.name">
                            <a :href=" navigation.href "
                                class="block
                                 py-2 
                                 pl-3 
                                 pr-4  
                                 text-light-tail-500 rounded
                                 dark:text-dark-tail-100 
                                 hover:text-light-tail-100 
                                 dark:hover:text-white" 
                                 
                                

                                aria-current="page">{{ navigation.name }}</a>
                        </li>
                      
                </ul>
            </div>
        </div>
    </nav>

</div>
</template>
<script setup>
import { ref,onMounted } from 'vue';

const showMobileMenu = ref('false');

const scrollBg = ref('false');

const navigation = [
    {name:'Home', href:'#home'},
    {name:'About', href:'#about'},
    {name:'Portfolio', href:'#portfolio'},
    {name:'Services', href:'#services'},
    {name:'Contact', href:'#contact'}

];

const setScrollBg =(value) =>{
    scrollBg.value = value;
}

onMounted(()=>{
    window.addEventListener("scroll", ()=>{
        return window.scrollY > 50 ? setScrollBg(true) : setScrollBg(false);
    })
})
</script>