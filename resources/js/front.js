window.axios = require('axios');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import App from'./views/App';
import VueRouter from 'vue-router'

Vue.use(VueRouter);
import AboutUs from './pages/AboutUs.vue';
import Contact from './pages/Contact.vue';

const router = new VueRouter({
    mode: 'history',
    routes: [

        {
            path: '/about-us',
            name: 'about-us',
            component: AboutUs
        },
        {
            path: '/contact',
            name: 'contact',
            component: Contact
        },
    ]
});

const app = new Vue({
    el: '#root',
    render: h => h (App),
    router
});
