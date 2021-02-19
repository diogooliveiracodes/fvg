<template>
<div class="row justify-content-center bg-light pt-5">
    <h1 class="text-center cor-azul gotham-bold pb-4" style="font-size: 2.9rem">O que nossos alunos falam:</h1>
    <div class="col" align-center>
        <div class="carrosell-maint" align="center">
            <v-carrossel-main
                @next="next"
                @prev="prev"
            >
                <v-carrossel-slide v-for="(slide,index) in slides" 
                    :key="slide" 
                    :index="index"
                    :visibleSlide= "visibleSlide"
                    :direction="direction">
                    <!-- <img :src="slide" alt="" /> -->
                    <video-embed :src="slide"></video-embed>

                </v-carrossel-slide>
            </v-carrossel-main>
        </div>
    </div>
</div>
</template>

<script>
    export default {
        data(){
            return {
                slides: [
                    'https://www.youtube.com/watch?v=SXGE6rdpJsE&ab_channel=FVGCirurgiaPl%C3%A1stica',
                    'https://www.youtube.com/watch?v=a9HrxU0S5rs&ab_channel=FVGCirurgiaPl%C3%A1stica'
                ],
                visibleSlide: 0,
                direction: 'left'
            }
        },
        computed:{
            slidesLen(){
                return this.slides.length;
            }
        },
        methods:{
            next(){
                if(this.visibleSlide >= this.slidesLen - 1){
                    this.visibleSlide = 0;
                } else{
                    this.visibleSlide++;
                }
                this.direction = 'left'
            },
            prev(){
                if(this.visibleSlide <= 0){
                    this.visibleSlide = this.slidesLen - 1;
                } else{
                    this.visibleSlide--;
                }
                this.direction = 'right'
            }
        }
    }
</script>

<style scoped>
    .carrossel-main{
        display: flex;
        justify-content: center;
    }
</style>