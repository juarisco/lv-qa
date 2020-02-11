
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./fontawesome');

window.Vue = require('vue');

import VueIziToast from 'vue-izitoast';
import 'izitoast/dist/css/iziToast.min.css';

Vue.use(VueIziToast);

import policies from './policies';
Vue.prototype.authorize = function(policy, model) {
     if (! window.Auth.signedIn) return false;

     if (typeof policy === 'string' && typeof model === 'object') {
         const user = window.Auth.user;

         return policies[policy](user, model);
     }
};
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('user-info', require('./components/UserInfo').default);
Vue.component('answer', require('./components/Answer').default);
Vue.component('favorite', require('./components/Favorite').default);
Vue.component('accept', require('./components/Accept').default);

const app = new Vue({
    el: '#app'
});
