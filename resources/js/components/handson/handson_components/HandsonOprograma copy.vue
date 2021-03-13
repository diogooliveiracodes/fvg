<template>
<div class="div-main-oprograma py-5 mx-0 px-0"
    style="background-image: url('http://fvgeducacaoensino.com.br/wp-content/uploads/2020/09/handson-fvg-curso-online.png')">
    <h3 class="pb-4"><strong>O Programa</strong></h3>
    <div class="" style="display: box;">
        <div class="div-textos-oprograma row mx-0 px-0 justify-content-center">
            <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12  div-textos">
                <p>
                    <strong>
                        No Hands On – Prótese de Mama ajudamos cirurgiões plásticos residentes ou recém formados a aplicarem as melhores práticas e ferramentas para alavancar os resultados de suas empresas.
                    </strong>
                </p>
                <p>
                    Aqui você vai elevar suas habilidades durante alguns processos necessários durante o procedimento cirúrgico. Atualizar suas práticas como: 
                    <strong>
                    marcação da paciente, colocação da prótese, fechamento da loja, montagem da mama, posicionamento da aréola, etc.
                    </strong> 
                </p>
                <a class="btn btn-md" href="#garantias">Eu quero participar do Hands On!</a>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12  div-textos">
                <h5>
                    <strong>IMERSÃO E MENTORIA PARA CIRURGIÕES PLÁSTICOS​</strong>
                </h5>
                <p>
                    Você vai ter dois dias de imersão em um grupo seleto, compartilhando conteúdo com profissionais qualificados e se preparando para o mercado da medicina 5.0.
                </p>
                <p><i class="fas fa-check cor-azul"></i>  2 dias de imersão</p>
                <p><i class="fas fa-check cor-azul"></i>  Prática e mentoria com a equipe FVG Cirurgia Plástica</p>
                <p><i class="fas fa-check cor-azul"></i>  Discussão dos casos e feedback das pacientes</p>
            </div>
        </div>
        <div class="row mx-0 px-0 justify-content-center">
            <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                <div style="display: flex; justify-content: space-between; flex-wrap: wrap" class="my-5">
                    <v-card-default cardTitulo="Conhecimento Aplicável​">
                        <strong>Do marketing médico<br>
                        à técnica cirúrgica:</strong><br>
                        aprenda o que é<br>
                        importante para sua<br>
                        evolução na prática
                    </v-card-default>
                    <v-card-default cardTitulo="Networking">
                        Construa uma <strong>rede de<br>
                        networking qualificada</strong><br>
                        durante a imersão.<br>
                    </v-card-default>
                    <v-card-default cardTitulo="Prática Cirúrgica">
                        Realize uma prática<br>
                        cirúrgica em <strong>pacientes<br>
                        reais</strong> com supervisão<br>
                        de nossos mentores.
                    </v-card-default>
                    <v-card-default cardTitulo="Recursos">
                        Você receberá todos<br>
                        os recursos necessários<br>
                        para aplicar as técnicas<br>
                        aprendidas. <strong>Todo o material<br>
                        do curso nas suas mãos!</strong><br>
                    </v-card-default>
                </div>

            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name: 'handsonOprograma'
}
</script>

<style scoped>
@media screen and (max-width: ){

}
    h3{
        color: white !important;
        text-align: center;
        font-family: 'gotham-book';
    }
    
    h5{
        color: white;
    }

    p{
        color: white !important;
        text-align: start;
        font-family: 'gotham-book';
        text-align: justify;
    }

    .div-textos-oprograma{
        display: flex;
        justify-content: center;
    }

    a{
        transition: all 0.3s ease-in-out 0s;
        background-color:rgb(147 187 194);
        border: none;
        border-radius: 20px;
        color: rgb(61 57 53);
    }
    a:hover{
        transform: scale3d(1.2, 1.2, 2);
        background-color:rgb(147 187 194);
        color: rgb(61 57 53);
    }
    a:after{
        transition: all 0.3s ease-in-out 0s;
        background-color:rgb(147 187 194);
        border: none;
        border-radius: 20px;
        color: rgb(61 57 53);
    }

</style>