<template>
  <div v-if="!isloaded">
    <welcomeFirstComponent></welcomeFirstComponent>
    <welcomeSecondComponent></welcomeSecondComponent>
    <welcomeNossosProgramas></welcomeNossosProgramas>
    <v-nossos-numeros home="true"></v-nossos-numeros>
    <welcomeCarousel></welcomeCarousel>
    <preFooter></preFooter>
    <v-footer home="true"></v-footer>
  </div>
</template>

<script>
import welcomeNossosProgramas from "./welcome_components/NossosProgramas";
import welcomeFirstComponent from "./welcome_components/FirstComponent";
import welcomeSecondComponent from "./welcome_components/SecondComponent";
import welcomeCarousel from "./welcome_components/WelcomeCarousel";
import btnSaberDetalhes from "./welcome_components/BtnSaberDetalhes";
import preFooter from "./welcome_components/PreFooter";

export default {

  components: {
    welcomeNossosProgramas,
    welcomeFirstComponent,
    welcomeSecondComponent,
    welcomeCarousel,
    btnSaberDetalhes,
    preFooter
  },
  data(){
    return{
      isloaded: false,
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