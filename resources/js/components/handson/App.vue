<template>
  <div v-if="!isloaded">
    <v-navbar imagem="images/logo-protese-mama.png" :handson="handson"></v-navbar>
    <handsonSobreOhandsOn></handsonSobreOhandsOn>
    <handsonOprograma></handsonOprograma>
    <v-nossos-numeros></v-nossos-numeros>
    <handsonCarousel></handsonCarousel>
    <v-footer></v-footer>
  </div>
</template>

<script>
import handsonCarousel from './handson_components/HandsonCarousel'
import handsonSobreOhandsOn from './handson_components/HandsonSobreOhandson'
import handsonOprograma from './handson_components/HandsonOprograma'
export default {
  name: 'handsonApp',
  components:{
    handsonCarousel,
    handsonSobreOhandsOn,
    handsonOprograma
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