
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

import Jeux from './components/JeuxComponent.vue';
import About from './components/AboutComponent.vue';


const router = new VueRouter({
  mode: 'history',
  base: window.axios.defaults.baseURL,
  routes: [
      {
          path: '/jeux',
          name: 'Jeux',
          component: Jeux
      },
      {
          path: '/about',
          name: 'About',
          component: About
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