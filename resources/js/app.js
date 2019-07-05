/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

Vue.component('message-chat', require('./components/message-chat.vue').default);

const app = new Vue({
    el: '#app',
    data: {
        message: '',
        chat: {
            message: []
        }
    },
    methods: {
        sending() {
            if(this.message != 0) {
                this.chat.message.push(this.message);
                this.message = '';
                // console.log(this.message);
            }
        }
    }
});
