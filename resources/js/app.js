require('./bootstrap');

window.Vue = require('vue').default;

// GLOBAL 
Vue.component('carousel-3d', require('./components/global/carousel-3d/Carousel3d.vue').default);
Vue.component('slide', require('./components/global/carousel-3d/Slide.vue').default);
Vue.component('v-navbar', require('./components/global/NavBar.vue').default);
Vue.component('v-footer', require('./components/global/Footer.vue').default);
Vue.component('v-footer', require('./components/global/Footer.vue').default);
Vue.component('v-nossos-numeros', require('./components/global/NossosNumeros.vue').default);
Vue.component('v-card-default', require('./components/global/CardDefault').default)
// END GLOBAL

// HOME 
Vue.component('v-welcome-app', require('./components/welcome/App.vue').default);
// END - HOME 

// HANDSON 
Vue.component('v-handson-app', require('./components/handson/App.vue').default);

// END - HANDSON 

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
