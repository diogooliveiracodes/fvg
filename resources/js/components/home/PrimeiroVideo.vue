<template>

    <div class="mx-0 px-0 bg-light py-5">
        <div class="row justify-content-center mx-0 px-0">
            <div class="col-lg-4 d-flex flex-column justify-content-center">
                <div class="row justify-content-end mx-0 px-0 div-image">
                        <img @click="videooverflow = true" src="images/imagem_fundo_video_abertura.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-3 px-2 d-flex flex-column justify-content-center div-text">
                <h5 class="gotham-bold text-muted">O que é a FVG Educação e Ensino</h5>
                <p class="text-muted">As imersões e mentorias da FVG Educação e Ensino é um negócio que surgiu a partir da necessidade de transferir conhecimento, prática e gestão empresarial para profissionais da saúde em posições estratégicas.</p>
                <p class="gotham-bold text-muted">Você está pronto para atualizar suas técnicas e promover mudanças significativas em seu negócio?</p>
            </div>
        </div>
        <div id="video-frente" v-if="videooverflow" >
            <video :autoplay="true" controls>
                <source  src="videos/abertura.mp4" type="video/mp4">
            </video>
            <i class="far fa-3x fa-times-circle cor-azul" @click="videooverflow=false" id="btn-fechar-video"></i>
      </div>
    </div>

</template>

<script>
export default {
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
    }
    @media only screen and (max-width: 600px) {
        img {
            width: 100%;
           
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
            justify-content: center !important;
        }
        .div-text{
            margin-top: 30px;
            justify-content: center;
            text-align: center;
        }
    }
    @media only screen and (min-width: 1200px){
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
    

</style>>
