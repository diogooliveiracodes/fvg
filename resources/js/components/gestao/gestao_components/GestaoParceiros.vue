<template>
  <div class="row mx-0 px-0 justify-content-center bg-white py-5">
        <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12 col-10">
            <h3 class="pb-4 pt-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-easing="ease-in-out">
                <strong>Conheça algumas empresas que confiam na FVG Educação & Ensino</strong>
            </h3>
            <carousel :navigationEnabled="true" :perPageCustom="[[556,1], [768, 2], [769, 4]]" :autoplay="true"  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-easing="ease-in-out">
                <slide>
                    <img src="images/gestao/carrosselMarcas/bartet.png" alt="">
                </slide>
                <slide>
                    <img src="images/gestao/carrosselMarcas/cedus.png" alt="">
                </slide>
                <slide>
                    <img src="images/gestao/carrosselMarcas/cep.png" alt="">
                </slide>
                <slide>
                    <img src="images/gestao/carrosselMarcas/cisos.png" alt="">
                </slide>
                <slide>
                    <img src="images/gestao/carrosselMarcas/clinica-pele.png" alt="">
                </slide>
                <slide>
                    <img src="images/gestao/carrosselMarcas/gustavo.png" alt="">
                </slide>
                <slide>
                    <img src="images/gestao/carrosselMarcas/medico-semfila.png" alt="">
                </slide>
                <slide>
                    <img src="images/gestao/carrosselMarcas/nefro-1.png" alt="">
                </slide>
                <slide>
                    <img src="images/gestao/carrosselMarcas/penchel.png" alt="">
                </slide>
                <slide>
                    <img src="images/gestao/carrosselMarcas/pollizi.png" alt="">
                </slide>
                <slide>
                    <img src="images/gestao/carrosselMarcas/premier.png" alt="">
                </slide>
                
            </carousel>
        </div>
  </div>
</template>

<script>
export default {
    name: 'handsonEquipe'
}
</script>

<style scoped>
@media screen and (max-width: 556px){
    img{
        width: 77vw;
    }
}
h3{
    text-align: center;
}
</style>