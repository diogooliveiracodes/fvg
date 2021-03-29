<template>
<div class="row div-main justify-content-center m-0 p-0" style="max-width: 100vw !important;">
    <div class="div-video">
        <video autoplay muted loop id="myVideo" class="p-0">
            <source src="videos/videofundo.mp4" type="video/mp4">
        </video>
    </div>
    <div style="height: 100%; background: rgba(3, 3, 3, 0.7); position: absolute; margin: 0px; padding: 0px">
        <div class="row justify-content-center px-0 mx-0">
            <div class="px-2 mx-0 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12" style="margin-top: 15%;">
                <div class="row mx-0 px-0">
                    <div class="col-xl-6 col-lg-8 col-md-10 col-sm-12 mx-0 px-0">
                        <h4 class="cor-azul gotham-bold">
                            Imersão e mentoria desenvolvida para você evoluir na prática
                        </h4>
                    </div>
                </div>
                <p class="text-white font15">O Hands On foi desenvolvido por cirurgiões plásticos,<br>
                    feito para cirurgiões plásticos e residentes, para atualizações<br>
                    de técnicas e promoção de mudanças significativas,<br>
                    do marketing médico à técnica cirúrgica.<br>
                </p>
                <a class="btn btn-lg" href="#oprograma">QUERO CONHECER OS PROGRAMAS</a>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name: 'welcomeVideoFundo'
}
</script>

<style scoped>
@media screen and (max-width: 556px) {
    h4{
        font-size: 2rem !important;
        margin-top: 10vh;
    }
    p{
        font-size: 1.3rem !important;
    }
}



.div-video, .div-main{
    height: 100vh !important;
    padding: 0px;
    max-width: 100vw !important;
}

.div-main{
    height: 100vh;
    position: relative;
    overflow: hidden;
}
p, h4{
    font-family: 'Gotham-book';
}
a{
    transition: all 0.3s ease-in-out 0s;
    background-color:rgb(147 187 194);
    border: none;
    border-radius: 20px;
    color: rgb(61 57 53);
}
a:hover{
    transform: scale3d(1.1, 1.1, 1);
    background-color:rgb(147 187 194);
    color: rgb(61 57 53);
}
h4{
    font-size: 2.7rem;
}
</style>