<template>
<div 
    class="row justify-content-center m-0 p-0" 
    style="height: 100vh; background-image: url('images/mamoplastia/background-first-component.png'">
    <div>
        <div class="row justify-content-center px-0 mx-0"
            data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-easing="ease-in-out">
            <div class="px-0 col-xl-8 col-lg-8 col-md-10 col-sm-12 col-12 text-center" style="margin-top: 15%;">
                <div class="row px-0 mx-0 justify-content-center">
                    <div class="col-xl-9 col-lg-10 col-md-11 col-sm-12 col-12">
                        <h1 class="text-white gotham-bold desktop">
                            Mamoplastia de Aumento:
                        </h1>
                        <h1 class="text-white gotham-bold desktop">
                            do Consultório ao Pós-Operatório
                        </h1>
                        <h1 class="text-white gotham-bold mobile" style="font-size: 2.7rem">
                            Mamoplastia de Aumento:
                        </h1>
                        <h1 class="text-white gotham-bold mobile" style="font-size: 2.7rem">
                            do Consultório ao Pós-Operatório
                        </h1>
                        <p class="branco-escuro"><small>powered by FVG Educação e Ensino</small></p>
                        <p class="branco-escuro text-first-component pt-3">Aqui nós falaremos sobre</p>
                        <p class="text-first-component text-white"><strong>as técnicas que utilizamos no nosso dia a dia,</strong></p>
                        <p class="branco-escuro text-first-component">e como fazemos para obter um resultado de excelência.</p>
                        <a class="btn btn-success mt-3 btn-lg" href="#oprograma">GARANTA SUA VAGA</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name: 'mamoplastiaFirstComponent'
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

}
@media screen and (min-width: 577px) {
    .mobile{
        display: none !important;
    }
}
.text-first-component{
    font-family: Gotham-light; 
    font-size: 1.6rem;
    line-height: 1rem;
}
.branco-escuro{
    color: #dadada;
}
p, h1, h2, h3, h4, h5{
    font-family: 'Gotham-book';
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