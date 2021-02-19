/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./v-video-embed/src/index.js')
require('./vue-coverflow/lib/index.js');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// HOME ------------
Vue.component('v-home-index-desktop', require('./components/home/HomeIndexDesktop.vue').default);
Vue.component('v-home-video-fundo', require('./components/home/HomeVideoFundo.vue').default);
Vue.component('v-btn-saber-detalhes', require('./components/home/BotaoSaberDetalhes.vue').default);
Vue.component('v-nossos-numeros', require('./components/home/NossosNumeros.vue').default);
Vue.component('v-nossos-programas', require('./components/home/NossosProgramas.vue').default);
Vue.component('v-pre-footer', require('./components/home/PreFooter.vue').default);
Vue.component('v-carrossel', require('./components/home/Carrossel.vue').default);
Vue.component('v-navbar-desktop', require('./components/home/NavBarDesktop.vue').default);
Vue.component('v-footer-desktop', require('./components/home/FooterDesktop.vue').default);
Vue.component('v-primeiro-video', require('./components/home/PrimeiroVideo.vue').default);
// END HOME ---------


Vue.component('video-embed', require('./v-video-embed/src/embed.vue').default);
Vue.component('coverflow', require('./vue-coverflow/lib/Coverflow.vue').default);

Vue.directive('scroll', {
    inserted: function (el, binding) {
      let f = function (evt) {
        if (binding.value(evt, el)) {
          window.removeEventListener('scroll', f)
        }
      }  
      window.addEventListener('scroll', f)
    }
  });

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
window.onload = function(){
    const app = new Vue({
        el: '#app',
    });
}
