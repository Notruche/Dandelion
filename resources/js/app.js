
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

//require('./bootstrap');

//window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 

const app = new Vue({
    el: '#app'
});
*/

import Vue from 'vue'
import VueRouter from 'vue-router'
import BootstrapVue from 'bootstrap-vue'
import KsVueScrollmagic from 'ks-vue-scrollmagic'

Vue.use(BootstrapVue)
Vue.use(VueRouter)
Vue.use(KsVueScrollmagic)

import Chapt1 from './views/chapters/chapt1'
import Chapt2 from './views/chapters/chapt2'
import Chapt3 from './views/chapters/chapt3'
import '../../public/css/app.css'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: 'chapitres/1',
            name: 'chapt1',
            component: Chapt1
        },
        {
            path: 'chapitres/2',
            name: 'chapt2',
            component: Chapt2
        },
        {
            path: 'chapitres/3',
            name: 'chapt3',
            component: Chapt3
        },
    ],
});

const chapt1 = new Vue({
    el: '#app',
    components: { Chapt1 },
    router,
});

const chapt2 = new Vue({
    el: '#app',
    components: { Chapt2 },
    router,
});

const chapt3 = new Vue({
    el: '#app',
    components: { Chapt3 },
    router,
});




if (window.location.hash == "#com")
    window.onload = function () {
        document.body.scrollIntoView(false);
    }
