<template>
<div 
    class="row justify-content-center m-0 p-0" 
    style="height: 100vh; background-image: url('images/mamoplastia/background-first-component.png'">
    <div>
        <div class="row justify-content-center px-0 mx-0"
            data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-easing="ease-in-out">
            <div class="px-0 col-xl-8 col-lg-8 col-md-10 col-sm-12 col-12 text-center" style="margin-top: 15%;">
                <div class="row px-0 mx-0 justify-content-center">
                    <div class="col-xl-9 col-lg-10 col-md-11 col-sm-12 col-12">
                        <h1 class="text-white desktop">
                            Mamoplastia de Aumento:
                        </h1>
                        <h1 class="text-white desktop">
                            do Consultório ao Pós-Operatório
                        </h1>
                        <h1 class="text-white mobile margin-top-title">
                            Mamoplastia de Aumento:
                        </h1>
                        <h1 class="text-white mobile">
                            do Consultório ao Pós-Operatório
                        </h1>

                        <!-- DESKTOP -->
                        <div class="desktop">
                            <p class="branco-escuro"><small>powered by FVG Educação e Ensino</small></p>
                            <p class="branco-escuro text-first-component pt-3">Aqui nós falaremos sobre</p>
                            <p class="text-first-component text-white">
                                <strong style="font-weight: 900 !important;">as técnicas que utilizamos no nosso dia a dia,</strong>
                            </p>
                            <p class="branco-escuro text-first-component">e como fazemos para obter um resultado de excelência.</p>
                            <a v-on:click="scrollToIdOnClick" class="btn btn-success mt-3 btn-lg" href="#valores">GARANTA SUA VAGA</a>
                        </div>
                        <!-- END DESKTOP -->

                        <!-- MOBILE -->
                        <div class="mobile">
                            <p class="branco-escuro mt-0" style="text-align: initial; margin-top: 0px;"><small>powered by FVG Educação e Ensino</small></p>
                            <p class="branco-escuro text-first-component margin-top-mobile mobile-text">
                                Aqui nós falaremos sobre
                                <strong class="mobile-negrito mobile-text">as técnicas que utilizamos no nosso dia a dia,</strong><br>
                                e como fazemos para obter um resultado de excelência.
                            </p>
                            <a v-on:click="scrollToIdOnClick" class="btn btn-success btn-lg margin-top-mobile" href="#valores">GARANTA SUA VAGA</a>
                        </div>
                        <!-- END MOBILE -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name: 'mamoplastiaFirstComponent',
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
    .margin-top-title{
        margin-top: 13vh;
    }
    h1{
        font-size: 2.3rem !important;
        text-align: initial;
    }
    .mobile-text{
        font-size: 1.2rem !important;
        text-align: initial;
    }
    .margin-top-mobile{   
        margin-top: 30px;
    }
    a{
        font-size: 1rem !important;
        width: 100%;
    }
    .desktop{
        display: none !important;
    }
    .mobile-negrito{
        font-weight: 700;
    }

}
@media screen and (min-width: 577px) {
    .mobile{
        display: none !important;
    }
    h1{
        line-height: 2rem;
    }
    .text-first-component{
        /* line-height: 1.5rem; */
        font-size: 1.7rem;
        font-weight: 100;
    }
}
.branco-escuro{
    color: #ffffff9c;
}
a{
    transition: all 0.3s ease-in-out 0s; 
    border: none;
    border-radius: 20px;
}
a:hover{
    transform: scale3d(1.1, 1.1, 1);
}
</style>