<template>
  <div id="caroulselvue" class="wrapper my-0 bg-white justify-content-center" >
    <div class="box my-0 py-5 my-0" style="width: 800px">
      <h1 class="cor-azul gotham-bold text-center">O que nossos alunos falam:</h1>
      <carousel-3d :display="3" :autoplay="true" :title="true" :space="300"
        :controlsVisible="true">
        <slide v-for="(slide, i) in slides" :index="i" :key="i">
          <div @click="getVideo(i)" v-on:mouseover="mousehover=true" v-on:mouseleave="mousehover=false">
            <img :src="slide.src" style="background-color: rgb(147 187 194);">
            <p id="img-desc" v-show="mousehover">{{slide.desc}}</p>
          </div>
        </slide>
      </carousel-3d>
      <div id="video-frente" v-show="videoFrente" >
        <v-carousel-video-um v-if="i == 0" :videoplay="videoFrente"></v-carousel-video-um>
        <v-carousel-video-dois v-if="i == 1" :videoplay="videoFrente"></v-carousel-video-dois>
        <v-carousel-video-tres v-if="i == 2" :videoplay="videoFrente"></v-carousel-video-tres>
        <v-carousel-video-quatro v-if="i == 3" :videoplay="videoFrente"></v-carousel-video-quatro>
        <i class="far fa-3x fa-times-circle cor-azul" @click="clearVideo()" id="btn-fechar-video"></i>
      </div>
    </div>

  </div>
</template>

<script>
import Carousel3d from "./carousel-3d/Carousel3d";
import Slide from "./carousel-3d/Slide";

const slides = [
  {
    title: 'Slide 1',
    desc: 'Dra. Bárbara Fonseca',
    src: 'images/barbara01.jpg',
  },
  {
    title: 'Slide 2',
    desc: 'Dr. Wilson - CEDUS',
    src: 'images/wilson01.jpg',
    
  },
  {
    title: 'Slide 3',
    desc: 'Dr. David Bravo ',
    src: 'images/david01.jpg',
  },
  {
    title: 'Slide 4',
    desc: 'Dr. José Neto',
    src: 'images/joseneto01.jpg',
  }
]

export default {
  name: 'App',
  components: {
    Carousel3d,
    Slide
  },
  data () {
    return {
      slides: slides,
      slideCount: 10,
      videoFrente: false,
      mousehover: false,
      i: 5
    }
  },
  methods: {
    getVideo(i){
        this.videoFrente=true
        this.i = i
    },
    clearVideo(){
        this.videoFrente=false

    },
    onSlideChanged (index) {
      console.log('onSlideChanged Callback Triggered', 'Slide Index ' + index)
    },
    onLastSlide (index) {
      console.log('onLastSlide Callback Triggered', 'Slide Index ' + index)
    },
    onMainSlideClick () {
      console.log('onMainSlideClick Callback Triggered')
    },
    onAfterSlideChanged (index) {
      console.log('@after-slide-changed Callback Triggered', 'Slide Index ' + index)
    },
    onSlideChange (index) {
      console.log('@before-slide-change Callback Triggered', 'Slide Index ' + index)
    },
    addSlide () {
      this.slideCount++
    },
    removeSlide () {
      if (this.slideCount > 1) {
        this.slideCount--
      }
    },
  }
}
</script>

<style lang="scss" scoped>
#caroulselvue {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
  display: flex;
}
#video-frente{
    position: fixed;
    background-color: black;
    top: 15%;
    right: 15%;
    width: 70%;
    max-height: 80%;
    z-index: 1000;
}
video{
  width: 100%;

}
#btn-fechar-video{
  position: absolute;
  top: 10px;
  right: 10px;
  cursor: pointer;
}
img:hover{
  filter: opacity(0.7) grayscale(0.5) brightness(0.5);
  transition: filter 0.5s;
  
}

#img-desc{
  position: absolute;
  font-size: 1.3rem;
  font-family: 'gotham-light';
  top: 60%;
  left: 50%;
  margin-left: -50%;
  width: 100%;
  color: white;
  text-align: center;
  pointer-events: none;
}
</style>
