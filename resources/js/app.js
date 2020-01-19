require('./bootstrap');

import Vue from 'vue';
window.Vue = Vue;

import Form from "./utilities/Form";
window.Form = Form;

import {ServerTable} from 'vue-tables-2';
Vue.use(ServerTable, {}, false, 'bootstrap4', 'default');

Vue.component('user-component', require('./views/users.vue').default);

const app = new Vue({
    el: '#app',
});