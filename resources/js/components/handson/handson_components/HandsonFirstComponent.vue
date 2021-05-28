<template>
<div 
    class="row justify-content-center m-0 p-0 padding-mobile" 
    style="height: 100vh; background-image: url('images/handson/backgroundhandson.jpg'">
    <div class="mx-0 px-0">
        <div class="row justify-content-center px-0 mx-0"
            data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-easing="ease-in-out">
            <div class="px-0 col-xl-8 col-lg-8 col-md-10 col-sm-12 col-12 px-0" style="margin-top: 15%;">
                <div class="row px-0 mx-0">
                    <div class="col-xl-9 col-lg-10 col-md-11 col-sm-12 col-12 px-0">
                        <h1 class="text-white desktop pb-2">
                            Desenvolvido para você evoluir na prática.
                        </h1>
                        <h1 class="text-white mobile">
                            Desenvolvido para você evoluir na prática.
                        </h1>
                        <p class="text-white font15">
                            São 2 dias de imersão, com 70% da metodologia prática e com mentoria
                            exclusiva, personalizada e individualizada da equipe FVG Cirurgia Plástica.
                            Desenvolvido para cirurgiões plásticos formados e residentes.
                        </p>
                        <p class="text-white font15">
                            Conheça as técnicas que utilizamos e aprenda como aplicá-las na prática.
                        </p>
                        <a v-on:click="scrollToIdOnClick" class="btn btn-success mt-3 btn-lg" href="#oprograma">QUERO CONHECER OS PROGRAMAS</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name: 'handsonFirstComponent',
    methods:{
        scrollToIdOnClick(event){
            event.preventDefault();
            const elemento = event.target;
            const id = elemento.getAttribute('href');
            const to = document.querySelector(id).offsetTop;
            const tela = screen.height * 0.08;
            window.scroll(0, to - tela);

        }
    }
}
</script>

<style scoped>
@media screen and (max-width: 576px) {
    h1{
        margin-top: 10vh;
        margin-bottom: 30px;
        font-size: 2.7rem !important;
    }
    p{
        font-size: 1.1rem !important;
    }    
    a{
        font-size: 1rem !important;
    }
    .desktop{
        display: none !important;
    }
    .padding-mobile{
        padding-right: 20px !important;
        padding-left: 20px !important;
        margin-left: 0px !important;
        margin-right: 0px !important;
        
    }

}
@media screen and (min-width: 577px) {
    .mobile{
        display: none !important;
    }
}
a{
    transition: all 0.3s ease-in-out 0s;
    /* background-color:rgb(147 187 194); */
    border: none;
    border-radius: 20px;
    /* color: rgb(61 57 53); */
}
a:hover{
    transform: scale3d(1.1, 1.1, 1);
    /* background-color:rgb(147 187 194); */
    /* color: rgb(61 57 53); */
}
</style>