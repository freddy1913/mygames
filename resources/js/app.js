
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'
Vue.use(VueRouter)

import Vuetify from 'vuetify'
Vue.use(Vuetify)

import 'vuetify/dist/vuetify.min.css' 

import Home from './components/HomeComponent.vue';
import Login from './components/LoginComponent.vue';

let app_url = window.location.pathname.split('/')
app_url = '/'+app_url[1]+'/'+app_url[2]+'/'



const router = new VueRouter({
  mode: 'history',
  base: app_url,
  routes: [
      {
          path: '/home',
          name: 'home',
          component: Home
      },
      {
          path: '/login',
          name: 'login',
          component: Login
      },
      {
          path: '/duplicates',
          name: 'Duplicates',
          component: Login
      }
  ],
})




/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('App', require('./components/App.vue'));

const app = new Vue({
    el: '#app',
    router,
    data: () => ({
      drawer: null
    })
  })