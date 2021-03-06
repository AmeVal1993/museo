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

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('form-create-area', require('./components/area/FormCreateArea.vue').default);
Vue.component('form-Edit-area', require('./components/area/FormEditArea.vue').default);
Vue.component('list-area', require('./components/area/ListArea.vue').default);
Vue.component('form-area', require('./components/area/FormArea.vue').default);
Vue.component('form-roles', require('./components/roles/FormRoles.vue').default);
Vue.component('select-menu', require('./components/roles/SelectMenu.vue').default);
Vue.component('list-permisos', require('./components/roles/ListPermisos.vue').default);
Vue.component('form-permisos', require('./components/roles/FormPermisos.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
