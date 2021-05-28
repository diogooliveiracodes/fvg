<template>
<div class="row justify-content-center mx-0 px-0 bg-light" id="saiba-mais">
    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 py-5 mx-0 px-0">
        <p class="title"><strong>Aprenda como transformar a prática com excelência</strong></p>
        <p class="subtitle">Confira o que você vai aprender</p>

        <div class="row mx-0 px-0">
            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 px-0 mx-0 padding-mobile">
                <!-- ACORDEON -->
                <div class="accordion" id="accordionExample" style="padding-left: 0px">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Anatomia e fisiologia das mamas
                        </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Atendimento no consultório
                        </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Marcação cirúrgica
                        </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Técnica cirúrgica
                        </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END ACORDEON -->
            </div>

            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 mt-3 px-0">
                <div class="row mx-0 px-0 justify-content-end">
                    <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12 offset-xl-1 offset-lg-1 offset-md-1 padding-mobile">
                        <img class="img-grafico" src="images/mamoplastia/grafico-mamoplastia.png" alt="">
                    </div>
                </div>
                <div class="row mx-0 px-0 justify-content-end padding-mobile">
                    <div class="text-second-component-bordered col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12 offset-xl-1 offset-lg-1 offset-md-1">
                        Ferramentas, estratégias e técnicas para você atualizar os seus resultados com a prática cirúrgica.
                    </div>
                </div>
            </div>
        </div>
        <div class="row mx-0 px-0 justify-content-center">
            <a v-on:click="scrollToIdOnClick" class="mt-3 botao" href="#valores">GARANTA SUA VAGA</a>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name: 'mastopexiaFirstComponent',
    methods:{
        scrollToIdOnClick(event){
            event.preventDefault();
            const elemento = event.target;
            const id = elemento.getAttribute('href');
            const to = document.querySelector(id).offsetTop;
            const tela = screen.height * 0.08;
            window.scroll(0, to - tela);

        }
    }
}
</script>

<style scoped>
@media screen and (max-width: 576px) {
    .botao{
        width: 90% !important;
    }
    .padding-mobile{
        padding-left: 20px !important;
        padding-right: 20px !important;
    }
}
@media screen and (min-width: 577px) {

}
.botao{
    background-color: #88c1d3;
    padding: 10px;
    border: none;
    border-radius: 8px;
    text-decoration: none;
    color: #222222;
    width: 25%;
    text-align: center;
    letter-spacing: .02rem;
    font-size: 1.1rem;
    /* font-family: "gotham-light"; */
    transition: all 0.3s ease-in-out 0s;
}

.botao:hover{
    transform: scale3d(1.1, 1.1, 1);
    transition: all 0.3s ease-in-out 0s;
}

/* ACORDEON */
.accordion-item{
    margin-top: 20px !important;
    margin-bottom: 20px !important;
    border: 2px solid #88C1D3;
    border-radius: 5px;
}

.accordion-button{
    font-weight: bold;
}

.accordion-button:hover{
    font-weight: bold;
    color: #88C1D3;
}

.accordion-button:not(.collapsed){
    font-weight: bold;
    color: #88C1D3;
}

.accordion-button:focus{
    border: none;
    text-decoration: none;
    box-shadow: none;
}

/* END ACORDEON */

.text-second-component-bordered{
    border: 2px solid #88C1D3;
    border-radius: 5px;
    padding: 30px;
    margin-top: 20px;
}
.img-grafico{
    height: 5rem;
    width: 5rem;
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
    /* font-family: "gotham-light"; */
    color: #222222a9;
    margin-top: 0px;
    padding-top: 0px;
    /* letter-spacing: -1px; */
}
</style>