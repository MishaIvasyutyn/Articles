<template>
    <div class="flex flex-col">
        <spinner v-if="loading"/>
        <div class="grid gap-1 grid-cols-3" v-else>
            <post-view @delete-post="deletePost" v-for="post in articles.posts" :key="post.id" :post-id="post.id"
                       :title="post.title" :body="post.body" :date="post.created_at"/>
        </div>
    </div>
</template>

<script>
import Spinner from "../Components/Spinner";
import PostView from "../Components/blog/PostView";

export default {
    name: "ArticlesComponent",
    components: {
        Spinner,
        PostView
    },
    data: () => ({
        loading: true,
        articles: [],
    }),
    methods: {
        getArticles() {
            axios.get('/api/posts')
                .then(response => {
                    this.articles = response.data;
                    //set timer for loading 0.5 sec
                    setTimeout(() => {
                        this.loading = false;
                    }, 150);
                }).catch(error => {
                console.log(error);
            });
        },
        deletePost(id) {
            axios.delete('/api/posts/' + id)
                .then(response => {
                    this.getArticles();
                }).catch(error => {
                console.log(error);
            });
        },
    },
    mounted() {
        this.getArticles();
    }
}
</script>

<style scoped>

</style>
