<template>
      <footer class="pt-4 pt-md-5 border-top pt-5 mb-0 pb-5 mx-0 px-0" style="background-color: rgb(61 57 53)">
        <div class="row justify-content-center mx-0"
            data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-easing="ease-in-out">
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 mx-0 px-0">
                <div class="row justify-content-center mx-0 px-0">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 px-0 mx-0 img-div-footer">
                            <img src="images/logo.png" alt="" style="height: 6rem"><br><br>
                            <div>
                                <a href="https://www.facebook.com/fvgeducacaoeensino/">
                                    <i class="i-mob fab fa-3x fa-facebook-square cor-azul"></i>
                                </a>
                                <a class="px-2" href="https://www.linkedin.com/company/fvgcirurgiaplastica/">
                                    <i class="i-mob fab fa-3x fa-linkedin cor-azul"></i>
                                </a>
                                <a href="https://www.instagram.com/fvgeducacaoeensino/">
                                    <i class="i-mob fab fa-3x fa-instagram-square cor-azul"></i>
                                </a>
                            </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 px-0 mx-0 div-footer">
                        <div style="display: flex;" class="flex-container">
                            <ul class="list-unstyled text-small">
                            <li><a class="btn btn-sm botao-fale-com-especialista" style="font-family: arial" href="#"><i class="fab fa-whatsapp"></i> Fale com nosso especialista</a></li>
                            <li class="cor-azul gotham-bold pt-2" style="font-size: 1.4rem">(31) 3090-4488</li>
                            <li class="cor-azul gotham-bold" style="font-size: 1.4rem">(31) 9 9678-8844</li>
                            <li class="text-white gotham-bold pt-2">Av. Bandeirantes, 694</li>
                            <li class="text-white">Mangabeiras – CEP: 30315-382</li>
                            <li class="text-white">Belo Horizonte / MG</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
</template>

<script>
export default {

}
</script>

<style scoped>
    @media screen and (max-width: 992px){
        .div-footer, .img-div-footer{
            text-align: center;
            justify-content: center;
        }
        .flex-container{
            justify-content: center !important;
        }
        .i-mob{
            padding-bottom: 15px;
        }
    }

    .flex-container{
        justify-content: flex-end;
    }
    a, i{
    transition: all 0.3s ease-in-out 0s;
    }
    a:hover, i:hover{
        transform: scale3d(1.2, 1.2, 2);
    }
</style>