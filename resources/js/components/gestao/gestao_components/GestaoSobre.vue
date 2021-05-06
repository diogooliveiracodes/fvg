<template>
    <div id="sobre" class="row mx-0 px-0 py-5 div-sobre-gestao">
            <div class="py-5" 
                data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-easing="ease-in-out">
                <h4><strong>Sobre o curso de Gestão e Marketing Médico</strong></h4>
                <p class="mt-3 desktop">
                    A imersão e mentoria em Gestão e Marketing Médico é um programa de desenvolvimento para médicos,
                    enfermeiros e demais <br> profissionais da saúde , incluindo gestores do segmento clínico e hospitalar,
                    no qual são abordados as técnicas, frameworks e ferramentas <br> de gestão, vendas, operações, <i>customer
                    experience e growth</i> usados pela FVG Cirurgia Plástica.
                </p>
                <p class="mt-3 mobile">
                    A imersão e mentoria em Gestão e Marketing Médico é um programa de desenvolvimento para médicos,
                    enfermeiros e demais profissionais da saúde , incluindo gestores do segmento clínico e hospitalar,
                    no qual são abordados as técnicas, frameworks e ferramentas de gestão, vendas, operações, <i>customer
                    experience e growth</i> usados pela FVG Cirurgia Plástica.
                </p>
            </div>
    </div>
</template>

<script>
export default {
    name: 'mastopexiaSobre'
}
</script>

<style scoped>
@media screen and (max-width: 556px){
    .div-sobre-gestao{
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
    .div-sobre-gestao{
        background-color: rgb(61 57 53)
    }
    p, h4 {
        color: white !important;
        text-align: center;
        /* font-family: 'Gotham-book'; */
    }
</style>