<template>
    <div class="card card-main mb-3 mt-3">
        <div class="row g-0">
            <div class="card col-5 div-img-background" 
                :style="styleObject">
                
            </div>
            <div class="col-7 px-2">
                <div class="card-body">
                    <div class="text-main">
                        <h5 class="card-title">
                            <slot name="titulo"></slot>
                        </h5>
                        <p class="card-text">
                            <small class="text-muted">
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
    </div>
</template>

<script>
export default {
    props:[
        'imagem', 'facebook', 'instagram', 'linkedin'
    ],
    data(){
        return{
            styleObject:{
                'backgroundImage':this.imagem
            }
        }
    }
}
</script>

<style>
    .div-img-background{
        background-position: center;
        background-size: auto 100%;
        background-repeat: no-repeat;
    }
    .card-text{
        text-align: justify !important;
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
        background-color: #c1edff;
    }
    i:hover{
        transform: scale3d(1.2, 1.2, 1.2);
        transition: all 0.5s;
    }
    .card{
        border: none !important;
        min-height: 270px !important;
    }
    .card-main{
        transition: all 0.3s;
    }
    @media screen and (max-width: 556px) {
        .card-main{
            -webkit-box-shadow: 2px 0px 21px 4px rgba(0,0,0,0.31);
            -moz-box-shadow: 2px 0px 21px 4px rgba(0,0,0,0.31);
            box-shadow: 2px 0px 21px 4px rgba(0,0,0,0.31);
        }
        .social-main{
            height: 15%;
        }
        .text-main{
            height: 80%;
            padding-bottom: 5%;
        }
    }
    .card-main:hover{
        box-shadow: 2px 0px 21px 4px rgba(0,0,0,0.1);
        transition: all 0.3s;
    }
    a{
        width: auto !important;
    }
    .card-body{
        height: 100%;
    }
    .social-main{
        height: 15%;
        padding-bottom: 5%;
    }
    .text-main{
        height: 80%
    }
</style>