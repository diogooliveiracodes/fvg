<template>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: rgb(61 57 53); height: 10%;">
        <div class="container-fluid px-0">
        <a class="navbar-brand p-0 m-0" href="#">
            <img src="images/logo.png" alt="" class="img-logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse px-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-5 px-0">
            <li class="nav-item dropdown px-0">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Imersão
                </a>
                <ul class="dropdown-menu px-0" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Hands On - Prótese de mama</a></li>
                <li><a class="dropdown-item" href="#">Hands On - Mastopexia</a></li>
                
                <li><a class="dropdown-item" href="#">Gestão e Marketing Médico</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown px-2">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Online
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Mamoplastia de aumento</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#" tabindex="-1">Sobre</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>
</template>

<script>
export default {

}
</script>

<style scoped>
    .img-logo{
        position: absolute;
        height: 80%;
        top: 10%;
        left: 20%;
        padding: 0;
    }
    .a-img-logo{
        position: absolute;
        top: 10%;
        left: 30%;
        padding: 0;
    }
    li{
        padding-left: 0;
        padding-right: 0;
    }
</style>