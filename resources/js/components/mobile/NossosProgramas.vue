<template>
  <section class="showcase bg-white">
    <h1 class="cor-azul gotham-bold mx-0 px-0" style="text-align: center">Nossos programas</h1>
    <div class="container-fluid p-0">
        <div class="row no-gutters mx-0 px-0">
            <div class="col-lg-6 order-lg-2 text-white m-0 p-0" style="background-image: url('images/img1.jpg');"></div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2>Hands On - Prótese de Mama</h2>
                <p class="lead mb-0">São 2 dias de imersão, com 70% da metodologia prática e com mentoria exclusiva, personalizada e individualizada da equipe FVG Cirurgia Plástica. Desenvolvido para cirurgiões plásticos formados e residentes.</p>
                <botao-saber-detalhes></botao-saber-detalhes>
            </div>
        </div>
        <div class="row no-gutters mx-0 px-0">
            <div class="col-lg-6 text-white showcase-img" style="background-image: url('images/img2.jpg');"></div>
            <div class="col-lg-6 my-auto showcase-text">
                <h2>Hands On - Mastopexia e Redução Mamária com prótese</h2>
                <p class="lead mb-0">São 30h de curso, divididas em 3 dias de imersão, com 70% da metodologia prática e mentoria exclusiva e individualizada da equipe FVG Cirurgia Plástica. Desenvolvido para cirurgiões plásticos formados e residentes.</p>
                <botao-saber-detalhes></botao-saber-detalhes>
            </div>
        </div>
        <div class="row no-gutters mx-0 px-0">
            <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('images/img3.jpg');"></div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2>Gestão e Marketing Médico</h2>
                <p class="lead mb-0">Tudo que você precisa saber para elevar seu negócio! Se você quer aumentar sua base de pacientes, o curso de Gestão e Marketing Médico é definitivamente para você! Saiba mais sobre o segredo para um marketing médico de sucesso.</p>
                <botao-saber-detalhes></botao-saber-detalhes>
            </div>
        </div>
        <div class="row no-gutters mx-0 px-0">
            <div class="col-lg-6 text-white showcase-img" style="background-image: url('images/img4.jpg');"></div>
            <div class="col-lg-6 my-auto showcase-text">
                <h2 style="font-family: gotham-bold">Online: Mamoplastia de Aumento</h2>
                <p class="lead mb-0 gotham-light">O objetivo do curso é, através do pilar de transferência do conhecimento FVG Cirurgia Plástica, repassar as práticas que vão desde o atendimento no consultório ao pós-operatório. Tudo isso online e na hora que você quiser e precisar. Confira!</p>
                <botao-saber-detalhes></botao-saber-detalhes>
            </div>
        </div>
    </div>
  </section>
</template>

<script>
import BotaoSaberDetalhes from '../home/BotaoSaberDetalhes.vue'
export default {
  components: { BotaoSaberDetalhes },
}
</script>

<style>
h2{
    font-family: 'Gotham-bold';
    color: rgb(147 187 194);
}
p {
    font-family: 'Gotham-light';
}
@media screen and (max-width: 600px){
    h1{
        padding-top: 40px;
    }
    .showcase-text{
        text-align: center;
    }
}
@media screen and (min-width: 601px) and (max-width: 992px){
    h1{
        padding-top: 60px;
    }
    .showcase-text{
        text-align: center;
    }
}
@media screen and (min-width: 993px) and (max-width: 1600px){
    h1{
        padding-top: 60px;
        padding-bottom: 40px;
    }
}
@media screen and (min-width: 1601px){
    h1{
        padding-top: 60px;
        padding-bottom: 60px;
    } 
}


</style>