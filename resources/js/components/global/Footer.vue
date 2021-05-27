<template>
      <footer class="pt-4 pt-md-5 border-top pt-5 mb-0 pb-5 mx-0 px-0" style="background-color: rgb(61 57 53)">
        <div class="row justify-content-center mx-0">
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 mx-0 px-0">
                <div class="row justify-content-center mx-0 px-0">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 px-0 mx-0 img-div-footer">
                            <a href="https://www.fvgeducacaoeensino.com.br"><img src="images/logo.png" alt="" style="height: 6rem"></a><br><br>
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
                            <li>
                                <!-- HOME -->
                                <a  v-if="home == 'true'"
                                    class="btn btn-sm botao-fale-com-especialista" style="font-family: arial" 
                                    href="https://wa.me/+553196788844?text=Olá!%20Gostaria%20de%20saber%20mais%20informações%20dos%20programas%20da%20FVG%20Educação%20e%20Ensino,%20pode%20me%20ajudar?">
                                    <i class="fab fa-whatsapp"></i> Fale com nosso especialista
                                </a>
                                
                                <!-- HANDS ON - PROTESE DE MAMA -->
                                <a  v-if="protese == 'true'"
                                    class="btn btn-sm botao-fale-com-especialista" style="font-family: arial" 
                                    href="https://wa.me/+553196788844?text=Olá!%20Gostaria%20de%20saber%20mais%20informações%20do%20Hands%20On%20-%20Prótese%20de%20Mama,%20pode%20me%20ajudar?">
                                    <i class="fab fa-whatsapp"></i> Fale com nosso especialista
                                </a>

                                <!-- HANDS ON - MASTOPEXIA -->
                                <a  v-if="mastopexia == 'true'"
                                    class="btn btn-sm botao-fale-com-especialista" style="font-family: arial" 
                                    href="https://wa.me/+553196788844?text=Olá!%20Gostaria%20de%20saber%20mais%20informações%20do%20Hands%20On%20-%20Mastopexia,%20pode%20me%20ajudar?">
                                    <i class="fab fa-whatsapp"></i> Fale com nosso especialista
                                </a>

                                <!-- GESTÃO E MARKETING MÉDICO -->
                                <a  v-if="gestao == 'true'"
                                    class="btn btn-sm botao-fale-com-especialista" style="font-family: arial" 
                                    href="https://wa.me/+553196788844?text=Olá!%20Gostaria%20de%20saber%20mais%20informações%20da%20Imersão%20e%20Mentoria%20de%20Gestão%20e%20Marketing%20Médico,%20pode%20me%20ajudar?">
                                    <i class="fab fa-whatsapp"></i> Fale com nosso especialista
                                </a>

                                <!-- ONLINE -->
                                <a  v-if="mamoplastia == 'true'"
                                    class="btn btn-sm botao-fale-com-especialista" style="font-family: arial" 
                                    href="https://wa.me/+553196788844?text=Olá!%20Gostaria%20de%20saber%20mais%20informações%20do%20Curso%20Online%20de%20Mamoplastia%20de%20Aumento,%20pode%20me%20ajudar?">
                                    <i class="fab fa-whatsapp"></i> Fale com nosso especialista
                                </a>

                                <!-- SOBRE -->
                                <a  v-if="sobre == 'true'"
                                    class="btn btn-sm botao-fale-com-especialista" style="font-family: arial" 
                                    href="https://wa.me/+553196788844?text=Gostaria%20de%20saber%20mais%20informações%20dos%20programas%20da%20FVG%20Educação%20e%20Ensino,%20pode%20me%20ajudar?">
                                    <i class="fab fa-whatsapp"></i> Fale com nosso especialista
                                </a>
                            </li>

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
    props:['home', 'protese', 'mastopexia', 'gestao', 'mamoplastia', 'sobre']
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