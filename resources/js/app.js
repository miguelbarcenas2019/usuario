

require('./bootstrap');

window.Vue = require('vue');

Vue.component('my-component', require('./components/MyComponent.vue').default);
Vue.component('form-component', require('./components/FormComponent.vue').default);
Vue.component('usuario-component', require('./components/UsuarioComponent.vue').default);


const app = new Vue({
    el: '#app',
});
