<!DOCTYPE html>
<html lang="en">
<head>
    {{-- VueJS App --}}
    <script src="js/app.js"></script>

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- VueJS --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/vue@2"></script> --}}

    {{-- Scripts  --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    {{-- Styles  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    {{-- Fontawsome --}}
    <script src="https://kit.fontawesome.com/9f90449050.js" crossorigin="anonymous"></script>

    

</head>
<body class="m-0 p-0">
    <div class="m-0 p-0" id="app">


    
    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: rgb(61 57 53); height: 10%;">
        <div class="container-fluid">
        <a class="navbar-brand px-5" href="#">
            <img src="images/logo.png" alt="" style="height: 4rem">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-5">

            {{-- Dropdown Imersão --}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Imersão
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Hands On - Prótese de mama</a></li>
                <li><a class="dropdown-item" href="#">Hands On - Mastopexia</a></li>
                {{-- <li><hr class="dropdown-divider"></li> --}}
                <li><a class="dropdown-item" href="#">Gestão e Marketing Médico</a></li>
                </ul>
            </li>
            {{-- END Dropdown Imersão --}}

            {{-- Dropdown Online --}}
            <li class="nav-item dropdown px-2">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Online
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Mamoplastia de aumento</a></li>
                </ul>
            </li>
            {{-- END Dropdown Online --}}

            <li class="nav-item">
                <a class="nav-link text-white" href="#" tabindex="-1">Sobre</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>
    {{-- END NAVBAR --}}

    @yield('content')

    {{-- FOOTER --}}
    <footer class="pt-4 pt-md-5 border-top pt-5 mb-0 pb-5 mx-0 px-0" style="background-color: rgb(61 57 53)">
        <div class="row justify-content-around mx-0">
            <div class="col-md-4 col-sm-12">
                <img src="images/logo.png" alt="" style="height: 6rem"><br><br>
                <div>
                    <a href="https://www.facebook.com/fvgeducacaoeensino/">
                        <i class="fab fa-3x fa-facebook-square cor-azul"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/fvgcirurgiaplastica/">
                        <i class="fab fa-3x fa-linkedin cor-azul"></i>
                    </a>
                    <a href="https://www.instagram.com/fvgeducacaoeensino/">
                        <i class="fab fa-3x fa-instagram-square cor-azul"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <ul class="list-unstyled text-small">
                <li><a class="btn btn-sm botao-fale-com-especialista" href="#"><i class="fab fa-whatsapp"></i> Fale com nosso especialista</a></li>
                <li class="cor-azul gotham-bold pt-2" style="font-size: 1.4rem">(31) 3090-4488</li>
                <li class="cor-azul gotham-bold" style="font-size: 1.4rem">(31) 9 9678-8844</li>
                <li class="text-white gotham-bold pt-2">Av. Bandeirantes, 694</li>
                <li class="text-white">Mangabeiras – CEP: 30315-382</li>
                <li class="text-white">Belo Horizonte / MG</li>
                </ul>
            </div>
        </div>
    </footer>
    {{-- END FOOTER --}}
</div>
</body>
<style>
    @font-face {
    src: url('fontes/Gotham/GothamBook.ttf');
    font-family: 'Gotham-book';   
    font-weight: normal;
    }
    @font-face {
    src: url('fontes/Gotham/GothamBold.ttf');
    font-family: 'Gotham-bold';   
    font-weight: normal;
    }

    body{
        font-family:'Gotham-book'; 
    }
    .cor-azul{
        color: rgb(147 187 194);
    }
    .gotham-bold{
        font-family: 'Gotham-bold';
    }
    a{
        text-decoration: none;
    }
    .botao-fale-com-especialista{
        border-radius: 15px;
        background-color: rgb(147 187 194);
        border: 1px solid rgb(147 187 194);
        font-family: 'Gotham-bold';
        font-size: 1rem;
        padding-left: 25px;
        padding-right: 25px;
        color: rgb(61 57 53);
    }
    #myVideo {
        position: relative;
        right: 0;
        top: 0;
        min-width: 100%; 
        min-height: 100%;
        width: auto; 
        height: auto;
        opacity: 100%;
        background-size: cover;
    }
    .font15{
        font-size: 1.5rem;
    }
    .cor-escura{
        background-color: rgb(61 57 53)
    }
</style>

</html>

