<template>
  <div v-if="!isloaded">
    <mastopexiaFirstComponent></mastopexiaFirstComponent>
    <mastopexiaSobre></mastopexiaSobre>
    <mastopexiaOprograma></mastopexiaOprograma>
    <mastopexiaEquipe></mastopexiaEquipe>
    <v-nossos-numeros mastopexia="true"></v-nossos-numeros>
    <mastopexiaCarousel></mastopexiaCarousel>
    <v-footer mastopexia="true"></v-footer>
  </div>
</template>

<script>
import mastopexiaCarousel from './mastopexia_components/MastopexiaCarousel'
import mastopexiaSobre from './mastopexia_components/MastopexiaSobre'
import mastopexiaOprograma from './mastopexia_components/MastopexiaOprograma'
import mastopexiaFirstComponent from './mastopexia_components/MastopexiaFirstComponent'
import mastopexiaEquipe from './mastopexia_components/MastopexiaEquipe'
export default {
  name: 'mastopexiaApp',
  components:{
    mastopexiaCarousel,
    mastopexiaSobre,
    mastopexiaOprograma,
    mastopexiaFirstComponent,
    mastopexiaEquipe
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