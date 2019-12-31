/*  INICIO DE ORIGINAL */
// require('./bootstrap');
// window.Vue = require('vue');
// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// const app = new Vue({
//     el: '#app',
// });
/*  FIN DE ORIGINAL */

require('./bootstrap');

// 1. Comment out this following line:
// window.Vue = require('vue');

// 2. Add below the above commented-out line:
import Vue from 'vue';
import VueRouter from "vue-router";

window.Vue = Vue;
Vue.use(VueRouter);

const routes = [
    { path: '/profile', component: require('./components/ProfileComponent.vue').default },
    { path: '/test', component: require('./components/TestComponent.vue').default }
]

/*
const router = new VueRouter({
    mode: 'history',
    routes // short for `routes: routes`
})
*/

import Form from "./utilities/Form";
window.Form = Form;

import router from './routes';

/* ... SNIP ... */

// 3. Update the new Vue intance at the bottom of the file.
new Vue({
    el: '#app',
    router
});

/*const app = new Vue({
    router
  }).$mount('#app')
  */