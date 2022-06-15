<template>
    <div class="max-w-sm rounded overflow-hidden shadow-lg mt-4 ml-12">
        <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">{{ title }}</div>
            <p class="text-gray-700 text-base">
                {{ getBody(body) }}
            </p>
        </div>
        <div class="px-6 pt-4 pb-2">
                <span
                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ date }}</span>
            <span
                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
            <span
                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
        </div>
        <router-link :to="'/article/' + postId" class="w-32 inline-block rounded-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-2 ml-6">
            View Post
        </router-link>
<!--        add delete post button-->
        <button @click="deletePost(postId)" class="w-32 inline-block rounded-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mb-2 ml-6">
            Delete Post
        </button>
    </div>
</template>

<script>
export default {
    name: "PostView",
    props:{
     title: {
         type: String,
         required: true
     },
        body: {
            type: String,
            required: true
        },
        date: {
            type: String,
            required: true
        },
        postId: {
            type: String,
            required: true
        },

    },
    methods: {
        getBody(body) {
            return body.substr(0, 100) + '...';
        },
        deletePost(postId) {
            this.$emit('delete-post', this.postId);
        }
    },
}
</script>

<style scoped>

</style>
