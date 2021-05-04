<template>
    <div class="row justify-content-center mx-0 px-0" id="div-prefooter">
        <div class="col-md-8 div-main" style="border: 1px solid red;">
            <div class="row justify-content-between mx-0 px-0">
                <div class="col-md-5 px-0"
                    data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-easing="ease-in-out">
                    <p class="text-muted" style="text-align: justify; font-weight: 100;">
                        Na FVG Educação & Ensino nossa missão
                        é ajudar cirurgiões plásticos formados e residentes
                        a evoluir com a prática cirúrgica e aprimorar skills
                        sobre gestão e boas práticas comerciais. Se você
                        quer sair na frente, assine nossa newsletter e
                        receba nossos conteúdos gratuitos.
                    </p>
                </div>
                <div class="col-md-5 px-0"
                    data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-easing="ease-in-out">
                    <p style="text-align: justify; color: black; font-weight: 900;">
                        Descubra como evoluir sua prática cirúrgica 
                        e se tornar um profissional da saúde 5.0
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
    .div-main{
        padding-top: 7%;
        padding-bottom: 7%;
    }
    #div-prefooter{
        background-color: #F6F6F6;
        max-width: 100vw !important;
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

</style>

<script>
    export default {
        name: 'preFooter'
    }
</script>
