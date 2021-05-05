<template>
    <div class="mx-0 px-0 py-5" style="background-color: white;">
        <div class="row justify-content-center m-0 p-0">
            <div 
                class="col-xl-3 col-lg-4 col-md-5 col-sm-6 col-12 px-0 mx-0" 
                style="display: block;"
                data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-easing="ease-in-out"
                >
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="images/sobre/sobre1.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="images/sobre/sobre2.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="images/sobre/sobre3.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="images/sobre/sobre4.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="images/sobre/sobre5.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
            <div 
                class="col-xl-3 col-lg-4 col-md-5 col-sm-6 col-12 div-text px-0 mx-0" 
                style="display: flex; align-items: center;"
                data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-easing="ease-in-out"
                >
                <div class="row justify-content-end mx-0 px-0">
                    <div class="col-xl-11 col-lg-11 col-md-11 col-sm-12 col-12 px-0 mx-0 padding-mobile">
                        <h4>Nosso propósito é transformar o seu negócio!</h4>
                        <br>
                        <p class="text-muted">
                            A FVG Educação e Ensino nasceu a partir de um dos principais 
                            pilares da FVG Cirurgia Plástica: a transferência do onhecimento. 
                            O nosso negócio se baseia em criar conexões entre os profissionais 
                            do mercado e repassar, através de 10 anos em experiência médica 
                            através de imersão e mentoria sobre práticas cirúrgicas e gestão 
                            empresarial para profissionais da saúde em posição estratégicas.
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <div id="video-frente" v-if="videooverflow" >
            <video :autoplay="true" controls>
                <source  src="videos/conhecaFVG.mp4" type="video/mp4">
            </video>
            <i class="far fa-3x fa-times-circle cor-azul" @click="videooverflow=false" id="btn-fechar-video"></i>
      </div>
    </div>
</template>

<script>
export default {
    name: 'sobreCarrossel',
    data(){
        return{
            videooverflow: false
        }
    }
}
</script>

<style scoped>
    @media only screen and (max-width: 576px) {
        .div-text{
            margin-top: 30px;
            justify-content: center;
            text-align: center;
        }
        .padding-mobile{
            padding-right: 20px !important;
            padding-left: 20px !important;
        }
    }
    @media only screen and (min-width: 601px) and (max-width: 992px) {
        .div-image{
            justify-content: flex-end !important;
        }
        .div-text{
            justify-content: center;

        }
    }

    #video-frente{
        position: fixed;
        background-color: black;
        top: 15%;
        right: 15%;
        width: 70%;
        max-height: 80%;
        z-index: 1000;
    }
    video{
        width: 100%;
    }
    #btn-fechar-video{
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
    }
    p{
        text-align: justify;
    }

</style>>
