<template>
<div class="row justify-content-center mx-0 px-0 bg-white padding-mobile" id="o-programa">
    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 py-5 mx-0 px-0">
        <p class="title"><strong>O que está incluso no programa?</strong></p>
        <p class="subtitle">Confira ao que você terá acesso ao garantir a seu passaporte </p>
        <p class="subtitle"> para o curso online em Mamoplastia de Aumento</p>
        <br><br>
        <div class="row mx-0 px-0">
            <!-- card 01 -->
            <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card-mamoplastia">
                    <div class="row align-items-center mx-0 px-0">
                        <div class="col mx-auto text-center">
                            <img class="img-card" src="images/mamoplastia/card/aula-online.svg" alt="">
                        </div>
                    </div>
                    <p class="title-card">Aulas Online</p>
                    <p class="text-card">
                        Mais de 2 horas de aulas
                        online gravadas exclusivas com
                        os mentores do Hands On.
                    </p>
                </div>
            </div>

            <!-- card 02 -->
            <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card-mamoplastia">
                    <div class="row align-items-center mx-0 px-0">
                        <div class="col mx-auto text-center">
                            <img class="img-card" src="images/mamoplastia/card/conhecimento.svg" alt="">
                        </div>
                    </div>
                    <p class="title-card">Conhecimento aplicável</p>
                    <p class="text-card">
                        Do marketing médico à Técnica
                        cirúrgica: aprenda o que é importante
                        para sua evolução na prática.
                    </p>
                </div>
            </div>

            <!-- card 03 -->
            <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card-mamoplastia">
                    <div class="row align-items-center mx-0 px-0">
                        <div class="col mx-auto text-center">
                            <img class="img-card" src="images/mamoplastia/card/publico.svg" alt="">
                        </div>
                    </div>
                    <p class="title-card">Público Exclusivo</p>
                    <p class="text-card">
                        Exclusivo para cirurgiões plásticos
                        residente ou formados.
                    </p>
                    
                </div>
            </div>

            <!-- card 04 -->
            <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card-mamoplastia">
                    <div class="row align-items-center mx-0 px-0">
                        <div class="col mx-auto text-center">
                            <img class="img-card" src="images/mamoplastia/card/digital.svg" alt="">
                        </div>
                    </div>
                    <p class="title-card">Digital e 100% Seguro</p>
                    <p class="text-card">
                        Todas as aulas ficam gravadas e foram
                        pensadas através de uma metodologia
                        que visa transferir conhecimento.
                    </p>
                </div>
            </div>

            <!-- card 05 -->
            <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card-mamoplastia">
                    <div class="row align-items-center mx-0 px-0">
                        <div class="col mx-auto text-center">
                            <img class="img-card" src="images/mamoplastia/card/atualizacoes.svg" alt="">
                        </div>
                    </div>
                    <p class="title-card">Atualizações</p>
                    <p class="text-card">
                        Acesso a todas as adaptações e 
                        atualizações dos conteúdos durante o
                        seu período de acesso ao curso.
                    </p>
                </div>
            </div>

            <!-- card 06 -->
            <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card-mamoplastia">
                    <div class="row align-items-center mx-0 px-0">
                        <div class="col mx-auto text-center">
                            <img class="img-card" src="images/mamoplastia/card/oportunidades.svg" alt="">
                        </div>
                    </div>
                    <p class="title-card">Oportunidades</p>
                    <p class="text-card">
                        Ofertas e convites exclusivos
                        para os alunos em toda a rede
                        FVG Educação e Ensino.
                    </p>
                </div>
            </div>


        </div>
    </div>
</div>
</template>

<script>
export default {
    name: 'mastopexiaFirstComponent'
}
</script>

<style scoped>
@media screen and (max-width: 576px) {
    .padding-mobile{
        padding-left: 20px !important;
        padding-right: 20px !important;
    }
}
@media screen and (min-width: 577px) {

}
.img-card{
    width: 30%;
    height: 30%;
}
.title-card{
    text-align: center;
    font-size: 1.2rem;
    font-weight: bold;
    margin-top: 10px;
}
.text-card{
    text-align: center;
    /* font-family: "gotham-light"; */
    margin-top: 0px;
    margin-bottom: 0px;
    min-height: 100px;
    color: #222222a9;
}
.card-mamoplastia{
    box-shadow: 0px 0px 18px -6px rgb(0 0 0 / 50%);
    border-style: solid;
    border-width: 0px 0px 6px 0px;
    border-color: #88C1D3;
    border-radius: 15px;
    padding: 10%;
    transition: 0.5s;
}
.card-mamoplastia:hover{
    transform: translateY(-10px);
    transition: 0.5s;
}


.title, .subtitle{
    text-align: center;
}
.title{
    font-size: 2rem;
    font-weight: 400;
    color: #414042;
    /* font-family: 'gotham-book'; */
    margin-bottom: 0px;
    /* letter-spacing: -1px; */
}
.subtitle{
    font-size: 1.4rem;
    color: #222222a9;
    /* font-family: "gotham-light"; */
    margin-top: 0px;
    padding-top: 0px;
    margin-bottom: 0px;
    padding-bottom: 0px;
    /* letter-spacing: -1px; */
}
</style>