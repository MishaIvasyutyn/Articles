import NavBarComponent from "./Components/NavBarComponent";
import ArticlesComponent from "./views/Articles";
import FooterComponent from "./Components/FooterComponent";

require('./bootstrap');
require('flowbite');

import {createApp} from 'vue';
import router from "./router";


const app = createApp({});
app.component('navbar-component', NavBarComponent);
app.component('footer-component', FooterComponent);
app.use(router)
app.mount('#app');


