require('./bootstrap');

window.Vue = require('vue').default;

// GLOBAL 
Vue.component('carousel-3d', require('./components/global/carousel-3d/Carousel3d.vue').default);
Vue.component('slide-3d', require('./components/global/carousel-3d/Slide.vue').default);
Vue.component('v-navbar', require('./components/global/NavBar.vue').default);
Vue.component('v-footer', require('./components/global/Footer.vue').default);
Vue.component('v-footer', require('./components/global/Footer.vue').default);
Vue.component('v-nossos-numeros', require('./components/global/NossosNumeros.vue').default);
Vue.component('v-card-default', require('./components/global/CardDefault').default)
Vue.component('v-card-mentores', require('./components/global/CardMentores').default)
Vue.component('v-card-mentores-masto', require('./components/global/CardMentoresMastopexia').default)
// END GLOBAL

// HOME 
Vue.component('v-welcome-app', require('./components/welcome/App.vue').default);

// HANDSON 
Vue.component('v-handson-app', require('./components/handson/App.vue').default);

// MASTOPEXIA
Vue.component('v-mastopexia-app', require('./components/mastopexia/App.vue').default);

// GESTAO
Vue.component('v-gestao-app', require('./components/gestao/App.vue').default);

// MAMOPLASTIA - ONLINE
Vue.component('v-mamoplastia-app', require('./components/mamoplastia/App.vue').default);

// SOBRE
Vue.component('v-sobre-app', require('./components/sobre/App.vue').default);


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

import { CardPlugin } from 'bootstrap-vue'
import Vue from 'vue';
Vue.use(CardPlugin)

import VueCarousel from 'vue-carousel';
Vue.use(VueCarousel);

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
