<template>
    <div style="top: 700px; background-color: white; padding-bottom: 3rem;">
        <h1 class="cor-azul gotham-bold mx-0 px-0" style="text-align: center">Nossos programas</h1>
        
        <div class="row justify-content-center mx-0 px-0" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-easing="ease-in-out">
            <img class="img-fundo-mobile" src="images/img1.jpg" alt="" style="margin: 0; padding:0;">
            <div style="background-position: right;  background-image: url('images/img1.jpg');" 
                class="col-lg-4 mx-0 px-0 col-md-4 col-sm-4 div-img-background">
            </div>
            <div class="div-text col-lg-4 col-md-4 col-sm-4 d-flex mx-0 px-0 flex-column justify-content-center">
                <div class="row justify-content-end mx-0 px-0">
                    <div class="col-xl-11 col-lg-11 col-md-11 col-sm-12 col-12">
                        <h3 class="gotham-bold text-muted">Hands On - Prótese de Mama</h3>
                        <p class="text-muted">São 2 dias de imersão, com 70% da metodologia prática e com mentoria exclusiva, personalizada e individualizada da equipe FVG Cirurgia Plástica. Desenvolvido para cirurgiões plásticos formados e residentes.</p>
                        <btnSaberDetalhes></btnSaberDetalhes>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mx-0 px-0 mt-5"
            data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-easing="ease-in-out">
            <img class="img-fundo-mobile" src="images/img2.jpg" alt="" style="margin: 0; padding:0;">
            <div class="div-text col-lg-4 col-md-4 col-sm-4 d-flex mx-0 px-0 flex-column justify-content-center">
                <div class="row justify-content-start mx-0 px-0">
                    <div class="col-xl-11 col-lg-11 col-md-11 col-sm-12 col-12">
                        <h3 class="gotham-bold text-muted">Hands On - Mastopexia e Redução Mamária com prótese</h3>
                        <p class="text-muted">São 30h de curso, divididas em 3 dias de imersão, com 70% da metodologia prática e mentoria exclusiva e individualizada da equipe FVG Cirurgia Plástica. Desenvolvido para cirurgiões plásticos formados e residentes.</p>
                        <btnSaberDetalhes></btnSaberDetalhes>
                    </div>
                </div>
            </div>
            <div style="background-position: left;  background-image: url('images/img2.jpg');" 
                class="col-lg-4 mx-0 px-0 col-md-4 col-sm-4 div-img-background">
            </div>
        </div>
        <div class="row justify-content-center mx-0 px-0 mt-5"
            data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-easing="ease-in-out">
            <img class="img-fundo-mobile" src="images/img3.jpg" alt="" style="margin: 0; padding:0;">
            <div style="background-position: right;  background-image: url('images/img3.jpg');" 
                class="col-lg-4 mx-0 px-0 col-md-4 col-sm-4 div-img-background">
            </div>
            <div class="div-text col-lg-4 col-md-4 col-sm-4 d-flex mx-0 px-0 flex-column justify-content-center">
                <div class="row justify-content-end mx-0 px-0">
                    <div class="col-xl-11 col-lg-11 col-md-11 col-sm-12 col-12">
                        <h3 class="gotham-bold text-muted">Gestão e Marketing Médico</h3>
                        <p class="text-muted">Tudo que você precisa saber para elevar seu negócio! Se você quer aumentar sua base de pacientes, o curso de Gestão e Marketing Médico é definitivamente para você! Saiba mais sobre o segredo para um marketing médico de sucesso.</p>
                        <btnSaberDetalhes></btnSaberDetalhes>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mx-0 px-0 mt-5"
            data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-easing="ease-in-out">
            <img class="img-fundo-mobile" src="images/img4.jpg" alt="" style="margin: 0; padding:0;">
            <div class="div-text col-lg-4 col-md-4 col-sm-4 d-flex flex-column mx-0 px-0 justify-content-center">
                <div class="row justify-content-start mx-0 px-0">
                    <div class="col-xl-11 col-lg-11 col-md-11 col-sm-12 col-12">
                        <h3 class="gotham-bold text-muted">Online: Mamoplastia de Aumento</h3>
                        <p class="text-muted">O objetivo do curso é, através do pilar de transferência do conhecimento FVG Cirurgia Plástica, repassar as práticas que vão desde o atendimento no consultório ao pós-operatório. Tudo isso online e na hora que você quiser e precisar. Confira!</p>
                        <btnSaberDetalhes></btnSaberDetalhes>
                    </div>
                </div>
            </div>
            <div style="background-position: left;  background-image: url('images/img4.jpg');" 
                class="col-lg-4 mx-0 px-0 col-md-4 col-sm-4 div-img-background">
            </div>
        </div>
    </div>
</template>

<style scoped>

@media screen and (max-width:575px) {
    h3{
        text-align: center;
    }
    p{
        font-size: 1rem;
        text-align: justify;
    }
    .img-fundo-mobile{
        display: block;
        max-width: 500px;
        max-height: 500px;
    }
    .div-img-background{
        display: none;
    }
}
@media screen and (min-width:576px) and (max-width: 1282px) {
    h3{
        text-align: left;
    }
    p{
        font-size: 1rem;
    }
    .img-fundo-mobile{
        display: none;
    }
    .div-img-background{
        height: 500px;
        background-size: auto 100%;
        background-repeat: no-repeat;
    }
}
@media screen and (min-width:1283px) and (max-width: 1817px) {
    .div-img-background{
        background-size: 100% auto;
        background-repeat: no-repeat;
        height: 450px;
    }
    .img-fundo-mobile{
        display: none;
    }
    p{
        font-size: 1rem;
    }
}
@media screen and (min-width: 1817px){
    .div-img-background{
        background-size: 100% auto;
        background-repeat: no-repeat;
        height: 450px;
    }
    .img-fundo-mobile{
        display: none;
    }
    p{
        font-size: 1rem;
    }
}
.div-text{
    padding-top: 20px;
    padding-bottom: 20px;
    margin: 0;
}
h1{
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
}
p{
    text-align: justify;
    font-family: 'Gotham-book';
}
h3{
    font-family: 'Gotham-book';
}

</style>


<script>
import btnSaberDetalhes from './BtnSaberDetalhes'
    export default {
        name: 'welcomeNossosProgramas',
        components: {
            btnSaberDetalhes
        }
    }
</script>
