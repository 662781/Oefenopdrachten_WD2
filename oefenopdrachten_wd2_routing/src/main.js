import { createApp } from 'vue'
import App from './App.vue'
import { createRouter, createWebHistory } from 'vue-router'

import Home from './components/Home.vue';
import About from './components/About.vue';
import ProductList from './components/ProductList.vue';
import CreateProduct from './components/CreateProduct.vue';
// import the missing components


const routes = [
    { path: '/', component: Home },
    { path: '/about', component: About },
    { path: '/productlist', component: ProductList },
    { path: '/createproduct', component: CreateProduct }
    // add the missing routes
];

const router = createRouter({
    "history": createWebHistory(),
    routes
})

const app = createApp(App);
app.use(router);
app.mount('#app');
