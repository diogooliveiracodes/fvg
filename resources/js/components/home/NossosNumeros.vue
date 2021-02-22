<template>
    <div id="div-nossos-numeros" v-scroll="aumentar">
        <h3 id="titulo-nossos-numeros" class="text-center gotham-bold">Nossos números</h3>
        <div class="row justify-content-center mx-0 px-0">
            <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12 col-12 mx-0 px-0">
                <div class=" mt-5 mx-0 px-0" style="display: flex; flex-wrap: wrap;">
                    <div class="flex-container">
                        <p class="font2">{{paciente}}+</p>
                        <p class="gotham-bold">PACIENTES ATENDIDOS</p>
                    </div>
                    <div class="flex-container">
                        <p class="font2">{{procedimentos}}+</p>
                        <p class="gotham-bold">PROCEDIMENTOS CIRÚRGICOS</p>
                    </div>
                    <div class="flex-container">
                        <p class="font2">{{horas}}+</p>
                        <p class="gotham-bold">HORAS CIRÚRGICOS</p>
                    </div>
                    <div class="flex-container">
                        <p class="font2">{{faturamento}}MM</p>
                        <p class="gotham-bold">FATURAMENTO</p>
                    </div>
                    <div class="flex-container">
                        <p class="font2">{{nps}}</p>
                        <p class="gotham-bold">NPS</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5 mx-0 px-0">
            <a class="btn btn-sm cor-escura col-11 col-sm-10 col-md-8 col-lg-4 col-xl-3 text-white">EU QUERO PARTICIPAR</a>
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
        width: 100%; 
        overflow: hidden; 
        pointer-events: none; 
        transform-style: preserve-3d; 
        backface-visibility: hidden; 
        will-change: transform, opacity; 
        margin-top: -8.8px; 
        transform: translate3d(0px, 36.8px, 0px);

    }

    @media screen and (max-width: 919px){
        .flex-container{
            width: 100% !important;
        }
    }
    @media screen and (min-width: 920px){
        .flex-container{
            width: 20%;
        }
    }

</style>



<script>
    export default {
        data(){
            return {
                paciente: 0,
                procedimentos: 0,
                horas: 0,
                faturamento: 0, 
                nps: 0,
                windowHeight: window.screen.height*3.3
            }
        },
        methods:{
            aumentar(){
                console.log(this.windowHeight)
                if (window.scrollY > this.windowHeight){
                    setInterval(()=>{
                        if(this.paciente<11000){
                            this.paciente = this.paciente+=20
                        }
                        if(this.procedimentos<7000){
                            this.procedimentos = this.procedimentos+=10
                        }
                        if(this.horas<18000){
                            this.horas = this.horas+=30
                        }
                        if(this.faturamento<38){
                            this.faturamento = this.faturamento+=2
                        }
                        if(this.nps<89){
                            this.nps = this.nps+=1
                        }
                    }, 100)
                }
            }
        }
    }
</script>
