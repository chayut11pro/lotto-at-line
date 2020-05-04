/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue'
window.Vue = require('vue');
import VueRouter from 'vue-router';
Vue.use(VueRouter);

window.axios = require('axios');


window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

const test = Vue.component('example-component', require('./components/ExampleComponent.vue').default);
const testbar = Vue.component('example-component2', require('./components/ExampleComponent2.vue').default);

const router = new VueRouter({
routes: [
{ path: '/vuejs/foo', component: test, name: 'Foo' },
{ path: '/vuejs/bar', component: testbar, name: 'Bar' },
{ path: 'vuejs/foo', component: test, name: 'Foo' },
{ path: 'vuejs/bar', component: testbar, name: 'Bar' },
{ path: 'foo', component: test, name: 'Foo' },
{ path: 'bar', component: testbar, name: 'Bar' }

],

mode: 'history'

});

Vue.component('example-component', require('./components/ExampleComponent.vue').default);


const app = new Vue({
    el: '#app',
});
