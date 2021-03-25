<template>
<div 
    class="row justify-content-center m-0 p-0" 
    style="height: 100vh; background-image: url('images/gestao/gestao_background_first_component.jpg'">
    <div>
        <div class="row justify-content-center px-0 mx-0"
            data-aos="fade-right" data-aos-duration="1000" data-aos-delay="50" data-aos-easing="ease-in-out">
            <div class="px-0 col-xl-8 col-lg-8 col-md-10 col-sm-12 col-12" style="margin-top: 15%;">
                <h4 class="text-white gotham-bold desktop" style="font-size: 2.7rem">
                    Prepare o seu negócio para um próximo nível
                </h4>
                <h4 class="text-white gotham-bold mobile" style="font-size: 2.7rem">
                    Prepare o seu negócio para um próximo nível
                </h4>
                <p class="text-white font15">
                    Aprenda a usar as principais estratégias, ferramentas e frameworks<br>
                    de gestão, vendas e growth usadas pela FVG Cirurgia Plástica <br>
                    no seu negócio, seja ele consultório, clínica, empresa familiar ou um hospital.
                </p>
                <p class="text-white font15">
                    Vamos te ajudar a aplicar as melhores práticas<br>
                    para alavancar os resultados do seu negócio.
                </p>

                <a class="btn btn-success btn-lg" href="#oprograma">QUERO CONHECER</a>
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
    h4{
        margin-top: 25vh;
        font-size: 2rem !important;
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
p, h4{
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
    /* background-color:rgb(147 187 194);
    color: rgb(61 57 53); */
}
</style>