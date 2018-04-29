
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

const app = new Vue({
    el: '#app',

    data: window.analytics
});

Echo.channel('analytics')
    .listen('AnalyticsUpdated', (e) => {
        console.log(e)
        Object.keys(e.analytics).forEach(stat => {
            window.analytics[stat] = e.analytics[stat];
        })
    });
