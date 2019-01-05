
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('navigation-wrapper', require('./components/NavigationWrapper.vue').default);
Vue.component('widget', require('./components/Widget.vue').default);
Vue.component('feedback-form', require('./components/FeedbackForm.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.prototype.$csrf = $('meta[name="csrf-token"]').attr('content');
Vue.prototype.$eventBus = new Vue(); // Global event bus

// EVENTS
Vue.prototype.EVENT_MOUNTED         = 'mounted';
Vue.prototype.EVENT_CREATED         = 'created';

Vue.prototype.EVENT_WIDGET_CREATED  = 'widget created';

const app = new Vue({
    el: '#app'
});
