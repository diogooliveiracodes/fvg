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

<!-- NAVBAR WELCOME -->
            <div v-if="pginicial == 'true'" :class="{'aplicarbg': aplicarbg}" 
                class="collapse navbar-collapse px-0" 
                id="navbarSupportedContent" 
                >
                <!-- NAVBAR DESKTOP -->
                <ul class="navbar-nav mb-2 mb-lg-0 px-0 navbar-desktop-welcome">
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
                        <a class="nav-link text-white" :href="sobrelink" tabindex="-1">Sobre</a>
                    </li>
                </ul>
                <!-- END NAVBAR DESKTOP -->
                <!-- NAVBAR MOBILE -->
                <ul class="navbar-nav mb-2 mb-lg-0 px-0 navbar-mobile-welcome">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Imersão
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgb(147 187 194);">
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
                        <a class="nav-link text-white" :href="sobrelink" tabindex="-1">Sobre</a>
                    </li>
                </ul>
                <!-- END NAVBAR MOBILE -->
            </div>
<!-- END NAVBAR WELCOME -->

<!-- NAVBAR CURSO ONLINE MAMOPLASTIA -->
            <div v-else-if="pgonline == 'true'" class="collapse navbar-collapse px-0" :class="{'aplicarbg': aplicarbg}" id="navbarSupportedContent">
                <ul class="navbar-nav nav-mobile-mamoplastia mb-2 mb-lg-0 px-0" id="navbar-mobile">
                    <li class="nav-item">
                        <a v-on:click="scrollToIdOnClick" class="nav-link text-white" href="#sobre" tabindex="-1">Saiba Mais</a>
                    </li>
                    <li class="nav-item">
                        <a v-on:click="scrollToIdOnClick" class="nav-link text-white" href="#oprograma" tabindex="-1">O Programa</a>
                    </li>
                    <li class="nav-item">
                        <a v-on:click="scrollToIdOnClick" class="nav-link text-white" href="#conteudo" tabindex="-1">Dúvidas Frequentes</a>
                    </li>
                    <li class="nav-item">
                        <a  v-on:click="scrollToIdOnClick"
                            href="https://app-vlc.hotmart.com/login"
                            style="border-radius: 5px; background-color: #88c1d3 !important; color: #222222 !important; padding: 5px; margin-top: 8px;"
                            class="botao-entrar-mobile-mamoplastia nav-link">ENTRAR</a>
                    </li>
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0 px-0" id="navbar-desktop">
                    <li class="nav-item">
                        <a v-on:click="scrollToIdOnClick" class="nav-link text-white" href="#saiba-mais" tabindex="-1">Saiba Mais</a>
                    </li>
                    <li class="nav-item">
                        <a v-on:click="scrollToIdOnClick" class="nav-link text-white" href="#o-programa" tabindex="-1">O Programa</a>
                    </li>
                    <li class="nav-item">
                        <a v-on:click="scrollToIdOnClick" class="nav-link text-white" href="#duvidas" tabindex="-1">Dúvidas Frequentes</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://app-vlc.hotmart.com/login" 
                            style="background-color: #88c1d3 !important; color: #222222 !important; margin-left: 20px; margin-right: 10px;" 
                            class="botao-login bg-primary nav-link">ENTRAR</a>
                    </li>
                </ul>
            </div>
<!-- END NAVBAR CURSO ONLINE MAMOPLASTIA -->

<!-- NAVBAR HANDS ON -->
            <div v-else class="collapse navbar-collapse px-0" :class="{'aplicarbg': aplicarbg}" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 px-0" id="navbar-mobile">
                    <li class="nav-item">
                        <a v-on:click="scrollToIdOnClick" class="nav-link text-white" href="#sobre" tabindex="-1">Saiba Mais</a>
                    </li>
                    <li class="nav-item">
                        <a v-on:click="scrollToIdOnClick" class="nav-link text-white" href="#oprograma" tabindex="-1">O Programa</a>
                    </li>
                    <li class="nav-item">
                        <a v-on:click="scrollToIdOnClick" class="nav-link text-white" href="#conteudo" tabindex="-1">Conteúdo</a>
                    </li>
                    <li class="nav-item">
                        <a v-on:click="scrollToIdOnClick" class="nav-link text-white" href="#mentores" tabindex="-1">Mentores</a>
                    </li>
                    <li class="nav-item">
                        <a v-on:click="scrollToIdOnClick" class="nav-link text-white" href="#depoimentos" tabindex="-1">Depoimentos</a>
                    </li>
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0 px-0" id="navbar-desktop">
                    <li class="nav-item">
                        <a v-on:click="scrollToIdOnClick" class="nav-link text-white" href="#sobre" tabindex="-1">Saiba Mais</a>
                    </li>
                    <li class="nav-item">
                        <a v-on:click="scrollToIdOnClick" class="nav-link text-white" href="#oprograma" tabindex="-1">O Programa</a>
                    </li>
                    <li class="nav-item">
                        <a v-on:click="scrollToIdOnClick" class="nav-link text-white" href="#conteudo" tabindex="-1">Conteúdo</a>
                    </li>
                    <li class="nav-item">
                        <a v-on:click="scrollToIdOnClick" class="nav-link text-white" href="#mentores" tabindex="-1">Mentores</a>
                    </li>
                    <li class="nav-item">
                        <a v-on:click="scrollToIdOnClick" class="nav-link text-white" href="#depoimentos" tabindex="-1">Depoimentos</a>
                    </li>
                </ul>
            </div>
<!-- END NAVBAR HANDS ON -->
        </div>
    </nav>
</template>

<script>
export default {
    props:['imagem', 'pginicial', 'naoinicial', 'handsonlink', 'mastopexialink', 'gestaolink', 'mamoplastialink', 'pgonline', 'sobrelink'],
    data(){
        return{
            aplicarbg: false
        }
    },
    methods:{
        handleScroll(){
            window.scrollY > 80 ? this.aplicarbg=true : this.aplicarbg=false
        },
        scrollToIdOnClick(event){
            event.preventDefault();
            const elemento = event.target;
            const id = elemento.getAttribute('href');
            const to = document.querySelector(id).offsetTop;
            const tela = screen.height * 0.08;
            window.scroll(0, to - tela);

        }
    },
}
</script>

<style scoped>
@media screen and (min-width: 992px) {
    .navbar-mobile-welcome{
        display: none;
    }
    .navbar-desktop-welcome{
        display: flex;
    }
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
    .navbar-desktop-welcome{
        display: none;
    }
    .navbar-mobile-welcome{
        display: flex;
        background: rgb(61 57 53) !important;
    }
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
/* CURSO ONLINE */
.botao-login{
    border: 1px solid #88c1d3;
    border-radius: 8px;
}
.nav-mobile-mamoplastia{
    align-items: center;
}

/* END CURSO ONLINE */
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