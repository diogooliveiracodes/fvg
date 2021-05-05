<template>
<div class="row justify-content-center mx-0 px-0" 
    style="height: 100vh; background-image: url('images/sobre/capa.jpg'">
    <div class="mx-0 px-0">
        <div class="row justify-content-center px-0 mx-0"
            data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-easing="ease-in-out">
            <div class="px-0 col-xl-8 col-lg-8 col-md-10 col-sm-12 col-12 mx-0" style="margin-top: 15%;">
                <div class="row px-0 mx-0">
                    <div class="col-xl-9 col-lg-10 col-md-11 col-sm-12 col-12 px-0 mx-0 padding-mobile">
                        <h1 class="desktop pb-2 titulo-sobre">
                            Melhore seus resultados e evolua na prática
                        </h1>
                        <h1 class="mobile titulo-sobre" style="font-size: 2.7rem">
                            Melhore seus resultados e evolua na prática
                        </h1>
                        <p class="text-white font15">
                            Nós da FVG Educação e Ensino ajudamos cirurgiões plásticos
                            formados e residentes e profissionais da saúde a saírem na frente 
                            no mercado. Isso, buscando os melhores resultados através de
                            cursos, imersões e mentorias para você evoluir na prática.
                        </p>
                        <a class="btn btn-success mt-3 btn-lg btn-sobre" href="#oprograma">QUERO CONHECER OS PROGRAMAS</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name: 'handsonFirstComponent'
}
</script>

<style scoped>
@media screen and (max-width: 576px) {
    h1{
        margin-top: 10vh;
    }
    p, a{
        font-size: 1rem !important;
    }
    .desktop{
        display: none !important;
    }
    .padding-mobile{
        padding-right: 20px !important;
        padding-left: 20px !important;
    }

}
@media screen and (min-width: 577px) {
    .mobile{
        display: none !important;
    }
}
.titulo-sobre{
    color: #88C1D3 !important;
}
.btn-sobre{
    color: #343434 !important;
    background-color: #88C1D3 !important;
}
a{
    transition: all 0.3s ease-in-out 0s;
    /* background-color:rgb(147 187 194); */
    border: none;
    border-radius: 20px;
    /* color: rgb(61 57 53); */
}
a:hover{
    transform: scale3d(1.1, 1.1, 1);
    /* background-color:rgb(147 187 194); */
    /* color: rgb(61 57 53); */
}
</style>