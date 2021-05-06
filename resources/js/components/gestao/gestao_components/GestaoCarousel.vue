<template>
  <div id="depoimentos" class="wrapper my-0 bg-white justify-content-center">
    <div class="box my-0 py-5 my-0" style="width: 800px"
      data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-easing="ease-in-out">
      <h1 class="cor-azul text-center padding-mobile">O que nossos alunos falam:</h1>
      <carousel-3d :display="3" :autoplay="true" :title="true" :space="300"
        :controlsVisible="true">
        <slide-3d v-for="(slide, i) in slides" :index="i" :key="i">
          <div @click="getVideo(i)" v-on:mouseover="mousehover=true" v-on:mouseleave="mousehover=false">
            <img :src="slide.src" style="background-color: rgb(147 187 194);">
            <p id="img-desc" v-show="mousehover">{{slide.desc}}</p>
          </div>
        </slide-3d>
      </carousel-3d>
      <div id="video-frente" v-show="videoFrente" >
        <vidDepDrJoseNeto v-if="i == 0" :videoplay="videoFrente"></vidDepDrJoseNeto>
        <vidDepDrRodrigoNelson v-if="i == 1" :videoplay="videoFrente"></vidDepDrRodrigoNelson>
        <vidDepDrWilson v-if="i == 2" :videoplay="videoFrente"></vidDepDrWilson>
        <vidDepDrCynthia v-if="i == 3" :videoplay="videoFrente"></vidDepDrCynthia>
        <vidDepDrKarine v-if="i == 4" :videoplay="videoFrente"></vidDepDrKarine>
        <vidDepDrMarcoChiarello v-if="i == 5" :videoplay="videoFrente"></vidDepDrMarcoChiarello>
        <i class="far fa-3x fa-times-circle cor-azul" @click="clearVideo()" id="btn-fechar-video"></i>
      </div>
    </div>

  </div>
</template>

<script>

const slides = [
  {
    title: 'Slide 1',
    desc: 'Dr. José Neto',
    src: 'images/gestao/depoimentos/jose-neto.png',
  },
  {
    title: 'Slide 2',
    desc: 'Dr. Rodrigo Nelson',
    src: 'images/gestao/depoimentos/rodrigo.png',
    
  },
  {
    title: 'Slide 3',
    desc: 'Dr. Wilson Cedus',
    src: 'images/gestao/depoimentos/wilson-cedus.png',
  },
  {
    title: 'Slide 4',
    desc: 'Dr. Cynthia Caram',
    src: 'images/gestao/depoimentos/cynthia.png',
  },
  {
    title: 'Slide 5',
    desc: 'Dr. Karine Martins',
    src: 'images/gestao/depoimentos/karine.png',
  },
  {
    title: 'Slide 6',
    desc: 'Dr. Marco Chiarello',
    src: 'images/gestao/depoimentos/marco.png',
  }
]

import vidDepDrJoseNeto from '../../global/videos/VidDepDrJoseNeto.vue'
import vidDepDrRodrigoNelson from '../../global/videos/vidDepDrRodrigoNelson.vue'
import vidDepDrWilson from '../../global/videos/VidDepDrWilson.vue'
import vidDepDrCynthia from '../../global/videos/VidDepDrCynthia.vue'
import vidDepDrKarine from '../../global/videos/VidDepDrKarine.vue'
import vidDepDrMarcoChiarello from '../../global/videos/VidDepDrMarcoChiarello.vue'

export default {
  name: 'welcomeCarousel',
  components: {
    vidDepDrJoseNeto,
    vidDepDrRodrigoNelson,
    vidDepDrWilson,
    vidDepDrCynthia,
    vidDepDrKarine,
    vidDepDrMarcoChiarello
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
@media screen and (max-width: 556px){
  .padding-mobile{
    padding-right: 20px !important;
    padding-left: 20px !important;
  }
}
#depoimentos {
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
  // font-family: 'gotham-light';
  top: 60%;
  left: 50%;
  margin-left: -50%;
  width: 100%;
  color: white;
  text-align: center;
  pointer-events: none;
}
</style>
