<template>
    <div class="row justify-content-center mx-0" id="div-prefooter">
        <div class="col-md-8">
            <div class="row justify-content-between">
                <div class="col-md-5"
                    data-aos="fade-right" data-aos-duration="1000" data-aos-delay="50" data-aos-easing="ease-in-out">
                    <p class="text-muted Gotham-light" style="text-align: justify;">
                        Na FVG Educação & Ensino nossa missão
                        é ajudar cirurgiões plásticos formados e residentes
                        a evoluir com a prática cirúrgica e aprimorar skills
                        sobre gestão e boas práticas comerciais. Se você
                        quer sair na frente, assine nossa newsletter e
                        receba nossos conteúdos gratuitos.
                    </p>
                </div>
                <div class="col-md-5 gotham-bold"
                    data-aos="fade-left" data-aos-duration="1000" data-aos-delay="50" data-aos-easing="ease-in-out">
                    Descubra como evoluir sua prática cirúrgica e se tornar um profissional da saúde 5.0
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
    #div-prefooter{
        background-color: #F6F6F6;
        padding-top: 7%;
        padding-bottom: 7%;
    }
    p{
        color: #858383;
        font-size: 1.1rem;
        font-weight: 300;
        line-height: 1.5;
        margin: 0 0 1em 0;
    }
    @media screen and (max-width: 767px){
        #div-prefooter{
            text-align: justify;
        }
    }
    *{
        font-family: 'Gotham-book';
    }
</style>

<script>
    export default {
        name: 'preFooter'
    }
</script>
