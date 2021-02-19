<template>
  <div id="app" class="wrapper my-0 bg-white justify-content-center" >
    <div class="box my-0 py-5 my-0" style="width: 800px">
      <h1 class="cor-azul gotham-bold text-center">O que nossos alunos falam:</h1>
      <carousel-3d :display="3" autoplay="true" 
        controlsVisible="true">
        <slide v-for="(slide, i) in slides" :index="i" :key="i">
          <a :href="slide.link"><img :src="slide.src"></a>
        </slide>
      </carousel-3d>
    </div>
  </div>
</template>

<script>
import Carousel3d from "./carousel-3d/Carousel3d";
import Slide from "./carousel-3d/Slide";

const slides = [
  {
    title: 'Slide 1',
    desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, maxime.',
    src: 'images/barbara01.jpg',
    link: 'https://google.com.br'
  },
  {
    title: 'Slide 2',
    desc: 'Lorem ipsum dolor sit amet ',
    src: 'images/david01.jpg',
    link: 'https://youtube.com.br'
  },
  {
    title: 'Slide 3',
    desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. ',
    src: 'images/joseneto01.jpg'
  },
  {
    title: 'Slide 4',
    desc: 'Lorem ipsum dolor sit amet,  Enim, maxime.',
    src: 'images/wilson01.jpg'
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
      slideCount: 10
    }
  },
  methods: {
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
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
  display: flex;
}
</style>
