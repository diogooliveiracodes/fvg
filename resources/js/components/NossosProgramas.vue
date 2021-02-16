<template>
    <div style="top: 700px; background-color: white;">
        <h1 class="cor-azul gotham-bold py-5 mx-0 px-0" style="text-align: center">Nossos programas</h1>
        <div class="row justify-content-center px-0 mx-0 pb-5">
            <div class="col-lg-4 col-md-3 col-sm-2">
                <img src="images/img1.jpg" alt="" style="width: 100%;">
            </div>
            <div class="col-lg-4 col-md-5 col-sm-6 ms-3 d-flex flex-column justify-content-center">
                <h3 class="gotham-bold text-muted">Hands On - Prótese de Mama</h3>
                <p class="text-muted font15">São 2 dias de imersão, com 70% da metodologia prática e com mentoria exclusiva, personalizada e individualizada da equipe FVG Cirurgia Plástica. Desenvolvido para cirurgiões plásticos formados e residentes.</p>
                <btn-saber-detalhes></btn-saber-detalhes>
            </div>
        </div>

        <div class="row justify-content-center px-0 mx-0 mt-5 py-5">
            <div class="col-lg-4 col-md-5 col-sm-6 me-3 d-flex flex-column justify-content-center">
                <h3 class="gotham-bold text-muted" style="text-align: right;">Hands On - Mastopexia e Redução Mamária com prótese</h3>
                <p class="text-muted font15" style="text-align: right;">São 30h de curso, divididas em 3 dias de imersão, com 70% da metodologia prática e mentoria exclusiva e individualizada da equipe FVG Cirurgia Plástica. Desenvolvido para cirurgiões plásticos formados e residentes.</p>
                <div class="row justify-content-end">
                    <btn-saber-detalhes></btn-saber-detalhes>
                </div>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-2">
                <img src="images/img2.jpg" alt="" style="width: 100%">
            </div>
        </div>

        <div class="row justify-content-center px-0 mx-0 mt-5 py-5">
            <div class="col-lg-4 col-md-3 col-sm-2">
                <img src="images/img3.jpg" alt="" style="width: 100%">
            </div>
            <div class="col-lg-4 col-md-5 col-sm-6 ms-3 d-flex flex-column justify-content-center">
                <h3 class="gotham-bold text-muted">Gestão e Marketing Médico</h3>
                <p class="text-muted font15">Tudo que você precisa saber para elevar seu negócio! Se você quer aumentar sua base de pacientes, o curso de Gestão e Marketing Médico é definitivamente para você! Saiba mais sobre o segredo para um marketing médico de sucesso.</p>
                <btn-saber-detalhes></btn-saber-detalhes>
            </div>
        </div>

        <div class="row justify-content-center px-0 mx-0 mt-5 py-5">
            <div class="col-lg-4 col-md-5 col-sm-6 me-3 d-flex flex-column justify-content-center">
                <h3 class="gotham-bold text-muted" style="text-align: right;">Online: Mamoplastia de Aumento</h3>
                <p class="text-muted font15" style="text-align: right;">O objetivo do curso é, através do pilar de transferência do conhecimento FVG Cirurgia Plástica, repassar as práticas que vão desde o atendimento no consultório ao pós-operatório. Tudo isso online e na hora que você quiser e precisar. Confira!</p>
                <div class="row justify-content-end">
                    <btn-saber-detalhes></btn-saber-detalhes>
                </div>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-2">
                <img src="images/img4.jpg" alt="" style="width: 100%">
            </div>
        </div>
        
    </div>

</template>
<style scoped>

</style>


<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
