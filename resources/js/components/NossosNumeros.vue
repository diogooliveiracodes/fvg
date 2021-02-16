<template>
    <div id="div-nossos-numeros" class="px-0 mx-0">
        <h3 id="titulo-nossos-numeros" class="text-center gotham-bold">Nossos números</h3>
        <div class="row justify-content-center mx-0 px-0">
            <div class="col-9">
                <div class="row justify-content-center mt-5 mx-0 px-0">
                    <div class="col-sm-2 px-0">
                        <p class="font2">11.000+</p>
                        <p class="font08 gotham-bold">PACIENTES ATENDIDOS</p>
                    </div>
                    <div class="col-sm-2">
                        <p class="font2">7.000+</p>
                        <p class="font08 gotham-bold">PROCEDIMENTOS CIRÚRGICOS</p>
                    </div>
                    <div class="col-sm-2">
                        <p class="font2">18.000+</p>
                        <p class="font08 gotham-bold">HORAS CIRÚRGICOS</p>
                    </div>
                    <div class="col-sm-2">
                        <p class="font2">38MM</p>
                        <p class="font08 gotham-bold">FATURAMENTO</p>
                    </div>
                    <div class="col-sm-1">
                        <p class="font2">89</p>
                        <p class="font08 gotham-bold">NPS</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <a class="btn btn-sm cor-escura col-sm-2 text-white">EU QUERO PARTICIPAR</a>
        </div>
        <div id="jarallax-container-0 px-0 mx-0" style="position: absolute; bottom: 0px; overflow: hidden; z-index: -100;">
            <img src="images/img1.jpg" alt="hero background" class="jarallax-img" >
        </div>
    </div>
</template>
<style scoped>
    p{
        text-align: center;
    }
    .font2{
        font-size: 2rem;
    }
    .font08{
        font-size: 0.8rem;
    }
    a{
        border-radius: 20px;
        padding: 5px;
        font-size: 1.4rem;
    }
    #div-nossos-numeros{
        padding-top: 3%;
        padding-bottom: 3%;
        background-color: RGB(147, 187, 194, 0.9);
        margin-bottom: 0px;
    }
    img{
        object-fit: cover;
        max-width: 100%;
        position: fixed; 
        bottom: 0px;  
        width: 90%; 
        overflow: hidden; 
        pointer-events: none; 
        transform-style: preserve-3d; 
        backface-visibility: hidden; 
        will-change: transform, opacity; 
        margin-top: -8.8px; 
        transform: translate3d(0px, 36.8px, 0px);

    }
    

</style>


<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
