<template>
  <div class="row justify-content-center mx-0 px-0 bg-dark">
    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 py-5 mx-0 px-0">
        <div class="row mx-0 px-0 justify-content-between">
            <div class="col-md-6 p-4 primeira-div">
                <h3 class="font-white">GARANTA SUA VAGA E ACESSE O CONTEÚDO COM RISCO ZERO</h3>
                <p class="font-white">O nosso curso online conta com garantia incondicional de satisfação.</p>
                <p class="font-white">
                    Você acessa agora o conteúdo, e se nos próximos 7 dias perceber 
                    que o conteúdo não era o que estava buscando, devolvemos 100% do 
                    valor investido para ter acesso ao programa.
                </p>
                <div class="d-flex">
                    <a class="mt-3 botao-fourth" href="#oprograma">EU QUERO PARTICIPAR</a>
                </div>
            </div>
            <div class="col-md-5 borda-azul p-4">
                <h3 class="font-white">Acesso geral disponível para não alunos Hands On</h3>
                <p class="preco">12x R$57,50</p>
                <p class="font-white avista">ou R$690 a vista</p>
                <p class="font-white"><i class="fas fa-check"></i> 2 Horas de Conteúdo Gravado</p>
                <p class="font-white"><i class="fas fa-check"></i> Suporte Na Plataforma de Aulas</p>
                <p class="font-white"><i class="fas fa-check"></i> Acesso a Comunidade no Telegram</p>
                <p class="font-white"><i class="fas fa-check"></i> Acesso vitalício ao Conteúdo</p>
                <p class="font-white"><i class="fas fa-check"></i> Certificado de Conclusão Digital</p>
            </div>
        </div>
    </div>
  </div>
</template>

<script>
export default {

}
</script>

<style>
@media screen and (max-width: 576px) {
    .botao-fourth{
        width: 100% !important;
    }
    .primeira-div{
        text-align: center;
    }
}
.avista{
    font-weight: 100;
    font-family: 'gotham-light';
    font-size: 1.2rem;
    color: #e2e2e2b2 !important;
    margin-top: -1rem;
    margin-bottom: 1rem;
    padding-top: 0px;
}
.preco{
    font-size: 2.5rem;
    color: #88c1d3;
    margin-bottom: 0px;
    padding-bottom: 0px;
    font-weight: bold;
}
.borda-azul{
    border: 1px solid #88c1d3;
    border-radius: 8px;
}
a{
    text-decoration: none !important;
}
.font-white{
    color: white;
    font-family: 'gotham-book';
}
.botao-fourth{
    background-color: #88c1d3;
    padding: 10px;
    border: none;
    border-radius: 8px;
    text-decoration: none !important;
    color: #222222;
    width: 60%;
    text-align: center;
    letter-spacing: .02rem;
    font-size: 1.1rem;
    font-family: "gotham-light";
    transition: all 0.3s ease-in-out 0s;
}

.botao-fourth:hover{
    transform: scale3d(1.1, 1.1, 1);
    transition: all 0.3s ease-in-out 0s;
    color: #222222;
}
</style>