require('./bootstrap');

window.Vue = require('vue');

Vue.component('nav-bar', require('./components/navComponent.vue').default);
Vue.component('exam-compo', require('./components/examComponent.vue').default);
Vue.component('customer-lead', require('./components/customerLeadComponent.vue').default);

const app = new Vue({
    el: '#app'
});