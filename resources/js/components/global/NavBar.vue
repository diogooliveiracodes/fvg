<template>
    <nav
        v-scroll="handleScroll" :class="{'aplicarbg': aplicarbg}"
        class="navbar navbar-expand-lg navbar-dark fixed-top" 
        style="height: 10%;">
        <div class="container-fluid px-0">
            <a class="navbar-brand p-0 m-0" href="#">
                <img :src="imagem" alt="" class="img-logo">
            </a>
            <button class="navbar-toggler bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div v-if="pginicial == 'true'" :class="{'aplicarbg': aplicarbg}" 
                class="collapse navbar-collapse px-0" 
                id="navbarSupportedContent" 
                >
                <ul class="navbar-nav mb-2 mb-lg-0 px-0">
                    <li class="nav-item dropdown px-0">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Imersão
                        </a>
                        <ul class="dropdown-menu px-0" aria-labelledby="navbarDropdown" style="background-color: rgb(147 187 194);">
                        <li><a class="dropdown-item" :href="handsonlink">Hands On - Prótese de mama</a></li>
                        <li><a class="dropdown-item" :href="mastopexialink">Hands On - Mastopexia</a></li>
                        <li><a class="dropdown-item" :href="gestaolink">Gestão e Marketing Médico</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Online
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgb(147 187 194);">
                            <li><a class="dropdown-item" :href="mamoplastialink">Mamoplastia de aumento</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#" tabindex="-1">Sobre</a>
                    </li>
                </ul>
            </div>
            <div v-else class="collapse navbar-collapse px-0" :class="{'aplicarbg': aplicarbg}" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 px-0" id="navbar-mobile">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#sobre" tabindex="-1">Saiba Mais</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#oprograma" tabindex="-1">O Programa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#conteudo" tabindex="-1">Conteúdo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#mentores" tabindex="-1">Mentores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#depoimentos" tabindex="-1">Depoimentos</a>
                    </li>
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0 px-0" id="navbar-desktop">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#sobre" tabindex="-1">Saiba Mais</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#oprograma" tabindex="-1">O Programa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#conteudo" tabindex="-1">Conteúdo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#mentores" tabindex="-1">Mentores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#depoimentos" tabindex="-1">Depoimentos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    props:['imagem', 'pginicial', 'naoinicial', 'handsonlink', 'mastopexialink', 'gestaolink', 'mamoplastialink'],
    data(){
        return{
            aplicarbg: false
        }
    },
    methods:{
        handleScroll(){
            window.scrollY > 80 ? this.aplicarbg=true : this.aplicarbg=false
        }
    },
}
</script>

<style scoped>
@media screen and (min-width: 992px) {
    .img-logo{
        position: absolute;
        height: 80%;
        top: 10%;
        left: 16.72%;
        padding: 0;
    }
    li{
        padding-left: 0;
        padding-right: 0;
    }
    #navbarSupportedContent{
        position: absolute;
        right: 19%;
        margin-right: -2.8%
    }
    #navbar-mobile{
        display: none;
    }
    #navbar-desktop{
        display: flex;
    }
}
@media screen and (max-width: 991px) {
    #navbarSupportedContent{
        padding-top:30px;
        padding-left: 10px !important;
        padding-right: 10px !important;
    }
    .img-logo{
        left: 20px;
    }
    .navbar-toggler{
        margin-right: 20px;
    }
    #navbar-desktop{
        display: none;
    }
    .nav-item{
        padding-left: 20px;
    }

}
.img-logo{
    position: absolute;
    height: 80%;
    top: 10%;
    padding: 0;
}
a{
    color: white !important;
}
a:hover{
    background-color: rgb(61 57 53) !important;
}
*{
    font-family: 'Gotham-book';
}
.navbar-toggler:focus{
    box-shadow: 0 0 0 0 !important;
}
.aplicarbg{
    background: rgb(61 57 53);
}
#navbarDropdown:hover{
    background: transparent !important;
}
.nav-item .nav-link{
    background: transparent !important;
}
#navbar-mobile{
    background: rgb(61 57 53);
    padding: 20px;
}

</style>