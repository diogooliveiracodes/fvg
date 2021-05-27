<template>
  <div v-if="!isloaded">
    <sobreCapa></sobreCapa>
    <sobreVideo></sobreVideo>
    <sobreCarrossel></sobreCarrossel>
    <v-nossos-numeros sobre="true"></v-nossos-numeros>
    <v-footer sobre="true"></v-footer>
  </div>
</template>

<script>

import sobreCapa from './sobre_components/SobreCapa'
import sobreVideo from './sobre_components/SobreVideo'
import sobreCarrossel from './sobre_components/SobreCarrossel'

export default {
  props:["rotawelcome"],
  name: 'mastopexiaApp',
  components:{
    sobreCapa,
    sobreVideo,
    sobreCarrossel
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