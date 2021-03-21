<template>
  <div v-if="!isloaded">
    <mastopexiaFirstComponent></mastopexiaFirstComponent>
    <mastopexiaSobre></mastopexiaSobre>
    <mastopexiaOprograma></mastopexiaOprograma>
    <v-nossos-numeros></v-nossos-numeros>
    <mastopexiaCarousel></mastopexiaCarousel>
    <v-footer></v-footer>
  </div>
</template>

<script>
import mastopexiaCarousel from './mastopexia_components/MastopexiaCarousel'
import mastopexiaSobre from './mastopexia_components/MastopexiaSobre'
import mastopexiaOprograma from './mastopexia_components/MastopexiaOprograma'
import mastopexiaFirstComponent from './mastopexia_components/MastopexiaFirstComponent'
export default {
  name: 'mastopexiaApp',
  components:{
    mastopexiaCarousel,
    mastopexiaSobre,
    mastopexiaOprograma,
    mastopexiaFirstComponent
  },
  data(){
    return{
      isloaded: false,
      handson: true
    }
  },
  mounted(){
    document.onreadystatechange = () => {
      if(document.readyState == 'complete'){
        this.isloaded = true;
      }
    }
  }
}
</script>

<style>

</style>