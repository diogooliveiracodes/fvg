<template>
  <div v-if="!isloaded">
    <gestaoFirstComponent></gestaoFirstComponent>
    <gestaoSobre></gestaoSobre>
    <gestaoOprograma></gestaoOprograma>
    <v-nossos-numeros></v-nossos-numeros>
    <gestaoCarousel></gestaoCarousel>
    <v-footer></v-footer>
  </div>
</template>

<script>
import gestaoCarousel from './gestao_components/GestaoCarousel'
import gestaoSobre from './gestao_components/GestaoSobre'
import gestaoOprograma from './gestao_components/GestaoOprograma'
import gestaoFirstComponent from './gestao_components/GestaoFirstComponent'
export default {
  name: 'gestaoApp',
  components:{
    gestaoCarousel,
    gestaoSobre,
    gestaoOprograma,
    gestaoFirstComponent
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