<template>
<div class="row justify-content-center m-0 p-0" style="height: 100%; overflow-y: hidden; position: relative; overflow: hidden;">

    <video autoplay muted loop id="myVideo" class="p-0" style="height: 100%;">
        <source src="videos/videofundo.mp4" type="video/mp4">
    </video>
    <div style="height: 100%; background: rgba(3, 3, 3, 0.7); position: absolute; margin: 0px; padding: 0px">
        <div class="row justify-content-center px-0 mx-0">
            <div class="col-md-9" style="margin-top: 15%;">
                <h4 class="cor-azul gotham-bold" style="font-size: 2.7rem">
                    Imersão e mentoria <br>
                    desenvolvida para você <br>
                    evoluir na prática
                </h4>
                <p class="text-white font15">O Hands On foi desenvolvido por cirurgiões plásticos,<br>
                    feito para cirurgiões plásticos e residentes, para atualizações<br>
                    de técnicas e promoção de mudanças significativas,<br>
                    do marketing médico à técnica cirúrgica.<br>
                </p>
                <button class="btn btn-lg" href="#garantias">QUERO CONHECER OS PROGRAMAS</button>
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
p, h4{
    font-family: 'Gotham-book';
}
button{
    transition: all 0.3s ease-in-out 0s;
    background-color:rgb(147 187 194);
    border: none;
    border-radius: 20px;
    color: rgb(61 57 53);
}
button:hover{
    transform: scale3d(1.2, 1.2, 2);
    background-color:rgb(147 187 194);
    color: rgb(61 57 53);
}
</style>