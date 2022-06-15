import { createWebHistory, createRouter } from "vue-router";
import Home from "./views/Home";
import About from "./views/About";
import Articles from "./views/Articles";
import Documentation from "./views/Documentation";

const routes = [
    {
        path: "/",
        name: "Home",
        component: Home,
    },
    {
        path: "/about",
        name: "About",
        component: About,
    },
    {
        path: "/docs",
        name: "Documentation",
        component: Documentation,
    },
    {
        path: "/articles",
        name: "Articles",
        component: Articles,
    },
    {
        path: "/article/:id",
        name: "PostShow",
        component: () => import("./views/Post.vue"),
    },
    {
        path: "/article/create",
        name: "PostCreate",
        component: () => import("./views/CreatePost.vue"),
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
