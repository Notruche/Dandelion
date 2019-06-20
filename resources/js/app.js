import Vue from 'vue'
import VueRouter from 'vue-router'
import BootstrapVue from 'bootstrap-vue'
import KsVueScrollmagic from 'ks-vue-scrollmagic'

Vue.use(BootstrapVue)
Vue.use(VueRouter)
Vue.use(KsVueScrollmagic)


window.Vue = require('vue');

import Chapt1 from './views/chapters/chapt1'
import Chapt2 from './views/chapters/chapt2'
import Chapt3 from './views/chapters/chapt3'
import '../../public/css/app.css'
Vue.component('chapt1', Chapt1);
Vue.component('chapt2', Chapt2);
Vue.component('chapt3', Chapt3);

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
    el: '#app1',
    components: { Chapt2 },
    router,
});

const chapt3 = new Vue({
    el: '#app2',
    components: { Chapt3 },
    router,
});




if (window.location.hash == "#com")
    window.onload = function () {
        document.body.scrollIntoView(false);
    }
