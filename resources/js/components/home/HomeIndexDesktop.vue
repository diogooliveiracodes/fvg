<template>
  <div v-if="!isloaded">
    <v-navbar-desktop></v-navbar-desktop>
    <v-home-video-fundo></v-home-video-fundo>
    <v-primeiro-video></v-primeiro-video>
    <v-nossos-programas></v-nossos-programas>
    <v-nossos-numeros></v-nossos-numeros>
    <v-carrossel></v-carrossel>
    <v-pre-footer></v-pre-footer>
    <v-footer-desktop></v-footer-desktop>
  </div>
</template>

<script>
export default {
  data(){
    return{
      isloaded: false
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