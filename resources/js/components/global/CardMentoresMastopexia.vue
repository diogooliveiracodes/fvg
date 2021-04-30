<template>
    <div class="div-main mx-0 px-0" 
        :class="{'div-main-background':ativo, 'protese':protese}"
        style="position: relative; display: flex; align-items: flex-end" 
        @mouseover="mudarClasse" 
        @mouseout="mudarClasse">
        
        <transition name="fade">
            <img :src="imagem" alt="" :class="{'img-ativo':ativo, 'img-inativo':inativo}">
        </transition>
            <div class="px-2">
                <div class="card-body">
                    <div class="text-main">
                        <h5 class="card-title">
                            <slot name="titulo"></slot>
                        </h5>
                        <p class="card-text">
                            <small class="">
                                <slot name="crm"></slot>
                            </small>
                        </p>
                        <p class="card-text">
                            <slot name="texto"></slot>
                        </p>
                    </div>

                    <div class="social-main">
                        <div class="row mx-0 px-0 mt-2 justify-content-end">
                            <a class="footer-social-icon color-component-primary bg-component-light" :href="facebook">
                                <i class="fa fa-facebook"></i>
                            </a> 
                            <a class="mx-2 footer-social-icon color-component-primary bg-component-light" :href="instagram">
                                <i class="fa fa-instagram"></i>
                            </a> 
                            <a class="footer-social-icon color-component-primary bg-component-light" :href="linkedin">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
    </div>
</template>

<script>
export default {
    props:[
        'imagem', 'facebook', 'instagram', 'linkedin', 'protese'
    ],
    data(){
        return{
            ativo: false,
            inativo: true
        }
    },
    methods:{
        mudarClasse(){
            console.log('passei aqui')
            this.ativo = !this.ativo
            this.inativo = !this.inativo
        }
    }
}
</script>

<style scoped>
    .protese{
        color: white !important;
        background: #7aa8b5;
        /* border-left: 10px solid white; */
    }


    i{
        color: white;
    }
    .div-main{
        height: 500px;
        max-width: 40vh !important;
        /* box-shadow: 1px 1px 14px 2px rgba(0,0,0,0.31); */
        
        transition: all .3s ease-in-out;
    }
    .div-main-background{
        /* border-left: 10px solid rgb(61 57 53); */
        transition: all .5s ease-in-out;
    }
    img{
        position: absolute;
    }
    .img-inativo{
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        transition: all .3s ease;
    }
    .img-ativo{
        top: 5%;
        left: 25%;
        width: 45% !important;
        height: 45% !important;
        box-shadow: 1px 1px 14px 2px #7aa8b5;
        transition: all .5s ease;
    }
    .card-text{
        text-align: justify !important;
        font-size: 0.8rem;
    }
    .footer-social-icon {
        border-radius: 100%;
        width: 40px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 21px;
    }
    .bg-component-light {
        background-color: transparent;
    }
    i:hover{
        transform: scale3d(1.2, 1.2, 1.2);
        transition: all 0.5s;
    }

    .card-main{
        transition: all 0.3s;
    }
    @media screen and (max-width: 556px) {
        .card-text{
            font-size: 1rem !important;
        }
        .social-main{
            height: 15%;
        }
        .text-main{
            height: 80%;
            padding-bottom: 5%;
        }
        .div-main{
            min-height: 80vh !important;
            min-width: 100% !important;
        }
    }
    @media screen and (min-width: 557px) and (max-width: 992px) {

        .social-main{
            height: 15%;
        }
        .text-main{
            height: 60%;
            padding-bottom: 5%;
        }
        .div-main{
            min-height: 80vh !important;

        }
    }
    a{
        width: auto !important;
    }
    .card-body{
        width: 100%;
        /* height: 50% !important; */
        overflow: hidden;
    }
    .social-main{
        height: 30px;
        /* padding-bottom: 5%; */
    }
    .text-main{
        height: 80%
    }
</style>