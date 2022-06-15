<template>
    <nav class="bg-gray-800">
        <div class="container mx-auto px-4 py-6">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <a href="#" class="text-gray-100">
                        <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    </a>
                    <p class="ml-3 text-xl font-semibold text-gray-100">Laravel</p>
                </div>
                <div  v-for="link in links"  class="flex items-center">
                    <router-link :to="link.url" class="ml-6 text-gray-100">{{link.name}}</router-link>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    name: "HeaderComponent",
    data() {
        return {
            links: [
                {
                    name: "Home",
                    url: "/"
                },
                {
                    name: "Documentation",
                    url: "/docs"
                },
                {
                    name: "About",
                    url: "/about"
                },
                {
                    name: "Articles",
                    url: "/articles"
                },
                {
                    name: "Create Article",
                    url: "/article/create"
                }
            ]
        }
    }


}
</script>

<style scoped>

</style>
