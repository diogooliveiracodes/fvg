<template>
    <div id="sobre" class="row mx-0 px-0 py-5 div-sobreohandson">
            <div class="py-5" 
                data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-easing="ease-in-out">
                <h4><strong>Sobre o HandsOn</strong></h4>
                <p class="mt-3 desktop">
                    O <strong>Hands On – Prótese de Mama</strong> é uma imersão desenvolvida para cirurgiões plásticos formados e residentes,
                    <br>feito por médicos especialistas, para atualizações das técnicas e promoção de mudanças significativas na prática cirúrgica.
                </p>
                <p class="mt-3 mobile">
                    O <strong>Hands On – Prótese de Mama</strong> é uma imersão desenvolvida para cirurgiões plásticos formados e residentes,
                    feito por médicos especialistas, para atualizações das técnicas e promoção de mudanças significativas na prática cirúrgica.
                </p>
            </div>
    </div>
</template>

<script>
export default {
    name: 'handsonSobreOhandsOn'
}
</script>

<style scoped>
@media screen and (max-width: 556px){
    .div-sobreohandson{
        padding-right: 20px !important;
        padding-left: 20px !important;
    }
    p{
        margin-top: 30px !important;
        text-align: justify !important;
    }
    .desktop{
        display: none !important;
    }
}
@media screen and (min-width: 557px){
    .mobile{
        display: none
    }
}
    .div-sobreohandson{
        background-color: rgb(61 57 53)
    }
    p, h4 {
        color: white !important;
        text-align: center;
        font-family: 'Gotham-book';
    }
</style>