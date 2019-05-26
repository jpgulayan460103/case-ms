/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


import Vue from 'vue';
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import CaseIndex from './components/CaseIndex';
import Api from './api/api'
import EventDispatcher from './service/EventDispatcher'

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('case-index', CaseIndex);
Vue.use(ElementUI);
Vue.prototype.$API = Api;
Vue.prototype.$EventDispatcher = new EventDispatcher();

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});


// Add a response interceptor
window.axios.interceptors.response.use((response) => {
    return response;
}, (error) => {

    if (error.response && error.response.status == 401) {
        app.$alert('Opss! Your session may have been expired. Please login.', 'UNAUTHENTICATED', {
            confirmButtonText: 'OK',
            callback: action => {
                if (error.response.data.error == "expired token") {
                    document.getElementById('logout-form').submit();
                } else {
                    location.reload()
                };
            }
        });
    } else if (error.response && error.response.status == 403) {
        app.$alert('Opss! You are not authorize', 'FORBIDDEN', {
            confirmButtonText: 'OK',
            callback: action => {
            }
        });
    } else if (error.response && error.response.status >= 500) {
        app.$alert('Opss! Something went wrong. Please report this to your technical support', 'SERVER ERROR', {
            confirmButtonText: 'OK',
            callback: action => {
            }
        });
    }
    return Promise.reject(error);
});


