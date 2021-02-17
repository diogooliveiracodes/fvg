<template>
<div class="row justify-content-center bg-light pt-5">
    <div class="col-md-4">
        <div class="carrosell-maint">
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
                    <iframe width="350" height="350"
                        :src="slide" frameborder="0" allowfullscreen>
                    </iframe>
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
                    'https://www.youtube.com/watch?v=BIsWNTWDaDQ&ab_channel=FVGCirurgiaPl%C3%A1stica',
                    'https://www.youtube.com/watch?v=SXGE6rdpJsE&ab_channel=FVGCirurgiaPl%C3%A1stica',
                    'https://www.youtube.com/watch?v=a9HrxU0S5rs&ab_channel=FVGCirurgiaPl%C3%A1stica',
                    'https://www.youtube.com/watch?v=ffjCuureU6s&ab_channel=FVGCirurgiaPl%C3%A1stica'
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