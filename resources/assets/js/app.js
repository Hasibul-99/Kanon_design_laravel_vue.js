require('./bootstrap');
window.Vue = require('vue');

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

let Landing = require('./components/landing.vue');

let Login = require('./components/user/login.vue');
let Signup = require('./components/user/signup.vue');

const routes = [
  { path: '/login', component: Login },
  { path: '/signup', component: Signup }
]

const router = new VueRouter({
  // mode: 'history',
  routes // short for `routes: routes`
})

const app = new Vue({
    el: '#app',
    router,
    components: {
      Landing, Login, Signup
    }
});
