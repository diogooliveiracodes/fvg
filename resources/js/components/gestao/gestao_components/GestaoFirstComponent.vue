<template>
<div 
    class="row justify-content-center m-0 p-0 padding-mobile" 
    style="height: 100vh; background-image: url('images/gestao/gestao_background_first_component.jpg'">
    <div class="mx-0 px-0">
        <div class="row justify-content-center px-0 mx-0"
            data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-easing="ease-in-out">
            <div class="px-0 col-xl-8 col-lg-8 col-md-10 col-sm-12 col-12 px-0" style="margin-top: 15%;">
                <h4 class="text-white desktop" style="font-size: 2.7rem">
                    Prepare o seu negócio para um próximo nível
                </h4>
                <h4 class="text-white mobile" style="font-size: 2.7rem">
                    Prepare o seu negócio para um próximo nível
                </h4>
                <p class="text-white font15 desktop">
                    Aprenda a usar as principais estratégias, ferramentas e frameworks<br>
                    de gestão, vendas e growth usadas pela FVG Cirurgia Plástica <br>
                    no seu negócio, seja ele consultório, clínica, empresa familiar ou um hospital.
                </p>
                <p class="text-white font15 mobile">
                    Aprenda a usar as principais estratégias, ferramentas e frameworks
                    de gestão, vendas e growth usadas pela FVG Cirurgia Plástica
                    no seu negócio, seja ele consultório, clínica, empresa familiar ou um hospital.
                </p>
                <p class="text-white font15 desktop">
                    Vamos te ajudar a aplicar as melhores práticas<br>
                    para alavancar os resultados do seu negócio.
                </p>
                <p class="text-white font15 mobile">
                    Vamos te ajudar a aplicar as melhores práticas
                    para alavancar os resultados do seu negócio.
                </p>

                <a v-on:click="scrollToIdOnClick" class="btn btn-success btn-lg" href="#oprograma">QUERO CONHECER</a>
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
        font-size: 2.7rem !important;
        margin-bottom: 30px;
        /* text-align: center; */
    }
    p, a{
        font-size: 1.1rem !important;
        font-weight: 100 !important;
    }
    .desktop{
        display: none !important;
    }
    p{
        /* text-align: justify; */
    }
    a{
        margin-top: 30px;
        width: 100%;
    }
    .padding-mobile{
        padding-left: 20px !important;
        padding-right: 20px !important;
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
    /* background-color:rgb(147 187 194);
    color: rgb(61 57 53); */
}
</style>