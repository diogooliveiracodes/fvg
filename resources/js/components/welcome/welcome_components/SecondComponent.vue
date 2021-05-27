<template>
    <div class="mx-0 px-0 bg-light py-5">
        <div class="row justify-content-center m-0 p-0">
            <div 
                class="col-xl-3 col-lg-4 col-md-5 col-sm-6 col-12 p-0 m-0" 
                style="display: block;"
                data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-easing="ease-in-out"
                >
                <div class="row justify-content-end m-0 p-0 div-image" style="display:flex">
                    <img @click="videooverflow = true" src="images/imagem_fundo_video_abertura.jpg" alt="">
                </div>
            </div>
            <div 
                class="col-xl-3 col-lg-4 col-md-5 col-sm-6 col-12 div-text" 
                style="display: flex; align-items: center"
                data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-easing="ease-in-out"
                >
                <div class="row justify-content-end mx-0 px-0">
                    <div class="col-xl-11 col-lg-11 col-md-11 col-sm-12 col-12">
                        <h5 class="text-muted">O que é a FVG Educação e Ensino</h5>
                        <p class="text-muted">As imersões e mentorias da FVG Educação e Ensino é um negócio que surgiu a partir da necessidade de transferir conhecimento, prática e gestão empresarial para profissionais da saúde em posições estratégicas.</p>
                        <p class="text-muted">Você está pronto para atualizar suas técnicas e promover mudanças significativas em seu negócio?</p>
                        <a class="btn btn-md" href="#oprograma">Quero saber mais</a>
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
    name: 'welcomeSecondComponent',
    data(){
        return{
            videooverflow: false
        }
    }
}
</script>

<style scoped>
    img{
        border-radius: 5px;
        padding: 0px;
        margin: 0px;
    }
    @media only screen and (max-width: 576px) {
        img {
            max-width: 576px;
            max-height: 576px;
        }
        .div-text{
            margin-top: 30px;
            justify-content: center;
            text-align: center;
        }
    }
    @media only screen and (min-width: 601px) and (max-width: 992px) {
        img {
            width: 300px;
            height: 300px;
        }
        .div-image{
            justify-content: flex-end !important;
        }
        .div-text{
            justify-content: center;

        }
    }
    @media only screen and (min-width: 993px){
        img {
            width: 400px;
            height: 400px;
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
</style>>
