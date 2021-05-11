<template>
    <div class="div-main mx-0 px-0" 
        :class="{'div-main-background':ativo, 'protese':protese}"
        style="position: relative; display: flex; align-items: flex-end" 
        @mouseover="mudarClasse" 
        @mouseout="mudarClasse">
        

            <img class="desktop" :src="imagem" alt="" :class="{'img-ativo':ativo, 'img-inativo':inativo}">
            <img class="mobile" :src="imagem" alt="">

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
            this.ativo = !this.ativo
            this.inativo = !this.inativo
        }
    }
}
</script>

<style scoped>

@media screen and (max-width: 556px) {
    .desktop{
        display: none;
    }
}
@media screen and (min-width: 557px) {
    .mobile{
        display: none;
    }
}
@media screen and (max-width: 556px) {
        .card-text{
            font-size: 1rem !important;
            line-height: 1.1rem;
            /* letter-spacing: -0.5px !important; */
            font-weight: 100;
            font-family: Arial;
        }
        h5{
            margin-bottom: 0px;
            padding-bottom: 0px;
        }
        .card-body{
            padding-bottom: 8px;
            padding-right: 8px;
            padding-left: 8px;

        }
        .social-main{
            height: 8%;
        }
        .text-main{
            height: 80%;
            /* padding-bottom: 5%; */
        }
        .div-main{
            width: 100% !important;
            height: 125.91vw !important;
            margin: 8px;
        }
        img{
            width: 95vw !important;
            height: 125.91vw !important;
            top: 5%;
            left: 25%;
            width: 45% !important;
            height: 45% !important;
            box-shadow: 1px 1px 14px 2px rgba(0,0,0,0.31);
            transition: all .5s ease;
        }
    }

    @media screen and (min-width: 557px) and (max-width: 768) {
        .div-main{
            width: 20vw !important;
            height: 25.18vw !important;
            /* box-shadow: 1px 1px 14px 2px rgba(0,0,0,0.31); */
            transition: all .3s ease-in-out;
        }
        .card-text{
            font-size: 1rem !important;
            line-height: 1.1rem;
            /* letter-spacing: -0.5px !important; */
            font-weight: 100;
            font-family: Arial;
        }
        h5{
            margin-bottom: 0px;
            padding-bottom: 0px;
        }
        .card-body{
            padding-bottom: 8px;
            padding-right: 8px;
            padding-left: 8px;

        }
        .social-main{
            height: 8%;
        }
        .text-main{
            height: 80%;
            /* padding-bottom: 5%; */
        }
    }

    @media screen and (min-width: 769px){
        .div-main{
            width: 20vw !important;
            height: 25.18vw !important;
            transition: all .3s ease-in-out;
        }
        .card-text{
            font-size: 1.4vh !important;
            font-weight: 100;
            font-family: Arial;
        }
        h5{
            margin-bottom: 0px;
            padding-bottom: 0px;
        }
        .card-body{
            padding-bottom: 8px;
            padding-right: 8px;
            padding-left: 8px;
        }
        .social-main{
            height: 4%;
        }
        .text-main{
            height: 80%;
        }
        .footer-social-icon {
            border-radius: 100%;
            width: 2vh !important;
            height: 2vh !important;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2vh !important;
        }
        .card-title{
            font-size: 2vh !important;
        }
        p{
            margin-bottom: 1vh;
        }
    }
    .protese{
        color: white !important;
        background: #7aa8b5;
        /* border-left: 10px solid white; */
    }
    i{
        color: white;
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
        box-shadow: 1px 1px 14px 2px rgba(0,0,0,0.31);
        transition: all .5s ease;
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