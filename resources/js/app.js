require('./bootstrap');

require('alpinejs');


window.Vue = require('vue');
Vue.use(require('vue-moment'));
// Vue components!
Vue.component('dashboard', require('./components/DashboardComponent.vue'));

// Create a Vue instance
const app = new Vue({el: '#app'});