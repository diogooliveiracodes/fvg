<template>
<div 
    class="row justify-content-center m-0 p-0 padding-mobile" 
    style="height: 100vh; background-image: url('images/mastopexia/mastopexia_background_first_component.jpg'">
    <div class="px-0 mx-0">
        <div class="row justify-content-center px-0 mx-0"
            data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-easing="ease-in-out">
            <div class="px-0 col-xl-8 col-lg-8 col-md-10 col-sm-12 col- px-0" style="margin-top: 15%;">
                <h4 class="text-white desktop" style="font-size: 2.7rem">
                    Imersão e mentoria <br>
                    desenvolvida para você <br>
                    evoluir na prática
                </h4>
                <h4 class="text-white mobile">
                    Imersão e mentoria
                    desenvolvida para você 
                    evoluir na prática
                </h4>
                <p class="text-white font15">
                    São 3 dias de imersão, com 70% da metodologia prática e com mentoria<br>
                    exclusiva, personalizada e individualizada da equipe <strong>FVG Cirurgia Plástica.</strong><br>
                    Desenvolvido para cirurgiões plásticos formados e residentes.
                </p>
                <p class="text-white font15">
                    Conheça as técnicas que utilizamos e aprenda como aplicá-las na prática.
                </p>
                <a v-on:click="scrollToIdOnClick" class="btn btn-success btn-lg" href="#oprograma">QUERO CONHECER OS PROGRAMAS</a>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name: 'mastopexiaFirstComponent',
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
    h4{
        margin-top: 15vh;
        font-size: 2.4rem !important;
        margin-bottom: 30px;
    }
    p{
        font-size: 1.1rem !important;
    }
    .desktop{
        display: none !important;
    }
    a{
        margin-top: 30px;
        font-size: .9rem !important;
        width: 100%;
    }
    .padding-mobile{
        padding-right: 20px !important;
        padding-left: 20px !important;
    }

}
@media screen and (min-width: 577px) {
    .mobile{
        display: none !important;
    }
}
a{
    transition: all 0.3s ease-in-out 0s;
    border: none;
    border-radius: 20px;
    /* color: rgb(61 57 53); */
}
a:hover{
    transform: scale3d(1.1, 1.1, 1);
    /* background-color:rgb(147 187 194);
    color: rgb(61 57 53); */
}
</style>