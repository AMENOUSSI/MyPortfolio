<template>
    <section id="contact" class="section bg-light-primary dark:bg-dark-primary">
        <div class="container mx-auto" v-motion="'custom'" :initial="{ opacity: 0, y: 100 }" :visible="{ opacity: 1, y: 0 }"
            :variants="{ custom: { scale: 2 } }">
            <div class="flex flex-col items-center text-center mb-14">
                <h2 class="section-title">Contact Me</h2>
                <p>So if you want to contact me, bellow you can find my email address and email or you can write to me.</p>
            </div>
            <div class="flex flex-col justify-between lg:flex-row lg:gap-x-8">
                <div class="flex flex-col items-start space-y-8 mb-12 lg:mb-0 lg:pt-2">
                    <div class="flex flex-col lg:flex-row gap-x-4">
                        <div
                            class="text-accent rounded-sm w-14 h-14 flex justify-center items-start mb-4 mt-2 lg:mb-0 text-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                                stroke="currentColor" className="w-6 h-6">
                                <path strokeLinecap="round" strokeLinejoin="round"
                                    d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>

                        </div>
                        <div>
                            <h4 class="font-body text-xl mb-1">Have a question?</h4>
                            <p class="mb-1 text-paragraph">I am here to help you or to work for you</p>
                            <p class="text-accent font-normal">Email me at julesamenoussi4@gmail.com</p>
                        </div>

                    </div>
                    <div class="flex flex-col lg:flex-row gap-x-4">
                        <div
                            class="text-accent rounded-sm w-14 h-14 flex justify-center items-start mb-4 mt-2 lg:mb-0 text-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>


                        </div>
                        <div>
                            <h4 class="font-body text-xl mb-1">Current location</h4>
                            <p class="mb-1 text-paragraph">Lome,Togo</p>
                            <p class="text-accent font-normal">Serving clients</p>
                        </div>

                    </div>
                </div>
                <form @submit.prevent="submit" action="space-y-8 w-full max-w-md justify-end">
                    <div v-if="showMessage"
                        class="m-2 p-4 bg-light-tail-500 dark:bg-dark-primary text-light-secondary rounded-lg">Tank you for
                        contacting me</div>
                    <div class="flex gap-8">
                        <div>
                            <input v-model="form.name" type="text" class="input" placeholder="Your Name">
                            <span v-if="form.errors.name" class="text-sm m-2 text-red-400">{{ form.errors.name }}</span>

                        </div>
                        <div c>
                            <input v-model="form.email" type="email" class="input" placeholder="Your Email">
                            <span v-if="form.errors.email" class="text-sm m-2 text-red-400">{{ form.errors.email }}</span>


                        </div>


                    </div>
                    <textarea v-model="form.body" class="textarea mt-14" placeholder="your message"
                        spellcheck="false"></textarea>
                    <span v-if="form.errors.body" class="text-sm m-2 text-red-400">{{ form.errors.body }}</span>
                    <button class="btn btn-lg bg-accent text-white rounded-xl mt-14">Send Message</button>

                </form>

            </div>

        </div>
    </section>
</template>
<script setup>
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';
const showMessage = ref(false);

const form = useForm({
    name: '',
    email: '',
    body: '',
})



function setShowMessage(value) {
    showMessage.value = value
}

function cleanForm() {
    form.reset();
    setShowMessage(true);
    setTimeout(() => setShowMessage(false), 2000);
}

const submit = () => {
    form.post(route('contact'), {
        preserveScroll: true,
        onSuccess: () => cleanForm
    })
}
</script>