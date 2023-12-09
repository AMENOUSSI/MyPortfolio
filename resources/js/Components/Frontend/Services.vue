<template>
    <section id="services" class="section bg-light-secondary dark:bg-dark-secondary">
        <div class="container mx-auto" v-motion="'custom'" :initial="{ opacity: 0, y: 100 }" :visible="{ opacity: 1, y: 0 }"
            :variants="{ custom: { scale: 2 } }">
            <div class="flex flex-col items-center">
                <h2 class="section-title">What I do for clients</h2>
                <p class="subtitle">
                   There are some projects I did for clients.
                </p>
            </div>
            <div class="grid lg:grid-cols-4 gap-8">
                <div class="bg-light-tail-100 dark:bg-dark-primary p-6 rounded-2xl">
                    <div class="text-accent rounded-sm w-12 h-12 flex justify-center items-center mb-24 text-[28px]">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                            x="0px" y="0px" viewBox="0 0 426.667 426.667" style="enable-background:new 0 0 426.667 426.667;"
                            xml:space="preserve">
                            <g>
                                <g>
                                    <g>
                                        <path
                                            d="M213.333,106.667c-58.88,0-106.667,47.787-106.667,106.667S154.453,320,213.333,320S320,272.213,320,213.333     S272.213,106.667,213.333,106.667z"
                                            fill="gold" />
                                        <path
                                            d="M213.333,0C95.467,0,0,95.467,0,213.333s95.467,213.333,213.333,213.333S426.667,331.2,426.667,213.333     S331.2,0,213.333,0z M213.333,384c-94.293,0-170.667-76.373-170.667-170.667S119.04,42.667,213.333,42.667     S384,119.04,384,213.333S307.627,384,213.333,384z"
                                            fill="gold" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <h4 class="text-4xl font-medium mb-2">Web Design</h4>
                    <p>
                        This is all concerning web design.
                    </p>
                </div>
                <div class="bg-light-tail-100 dark:bg-dark-primary p-6 rounded-2xl">
                    <div class="text-accent rounded-sm w-12 h-12 flex justify-center items-center mb-24 text-[28px]">
                        <svg viewBox="0 0 160 40" xmlns="http://www.w3.org/2000/svg">
                            <a xlink:href="https://developer.mozilla.org/">
                                <text x="10" y="25">MDN Web Docs</text>
                            </a>
                        </svg>
                    </div>
                    <h4 class="text-4xl font-medium mb-2">Web Development</h4>
                    <p>
                        For the web development, I use variety technologies.
                    </p>
                </div>
                <div class="bg-light-tail-100 dark:bg-dark-primary p-6 rounded-2xl">
                    <div class="text-accent rounded-sm w-12 h-12 flex justify-center items-center mb-24 text-[28px]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path
                                d="M148 288h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm108-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 96v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm192 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96-260v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h48V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h128V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h48c26.5 0 48 21.5 48 48zm-48 346V160H48v298c0 3.3 2.7 6 6 6h340c3.3 0 6-2.7 6-6z" />
                        </svg>
                    </div>
                    <h4 class="text-4xl font-medium mb-2">SEO</h4>
                    <p>I work on optimization and all other aspects which can make website  being easily reachable or Search Engine Optimization  .
                    </p>
                </div>
                <div class="bg-light-tail-100 dark:bg-dark-primary p-6 rounded-2xl">
                    <div class="text-accent rounded-sm w-12 h-12 flex justify-center items-center mb-24 text-[28px]">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                            x="0px" y="0px" viewBox="0 0 426.667 426.667" style="enable-background:new 0 0 426.667 426.667;"
                            xml:space="preserve">
                            <g>
                                <g>
                                    <g>
                                        <path
                                            d="M213.333,106.667c-58.88,0-106.667,47.787-106.667,106.667S154.453,320,213.333,320S320,272.213,320,213.333     S272.213,106.667,213.333,106.667z"
                                            fill="gold" />
                                        <path
                                            d="M213.333,0C95.467,0,0,95.467,0,213.333s95.467,213.333,213.333,213.333S426.667,331.2,426.667,213.333     S331.2,0,213.333,0z M213.333,384c-94.293,0-170.667-76.373-170.667-170.667S119.04,42.667,213.333,42.667     S384,119.04,384,213.333S307.627,384,213.333,384z"
                                            fill="gold" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <h4 class="text-4xl font-medium mb-2">Branding</h4>
                    <p>
                        For all that concern wether the choice of technology or designing, don't be afraid. .
                    </p>
                </div>

            </div>

        </div>
    </section>
</template>
<script setup>
</script>