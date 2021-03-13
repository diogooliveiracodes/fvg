<!DOCTYPE html>
<html lang="en">
<head>
    {{-- VueJS App --}}
    <script src="js/app.js"></script>

    {{-- AOS  --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- VueJS --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/vue@2"></script> --}}

    {{-- Scripts  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">    
    
    <link href="./css/landing-page.min.css" rel="stylesheet">

    {{-- Fontawsome --}}
    <script src="https://kit.fontawesome.com/9f90449050.js" crossorigin="anonymous"></script>
</head>
<body class="m-0 p-0">
    <div class="m-0 p-0" id="app">

        @yield('content')

    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</body>
<style>
    @font-face {
    src: url('fontes/Gotham/GothamBook.ttf');
    font-family: 'Gotham-book';
    }
    @font-face {
    src: url('fontes/Gotham/GothamBold.ttf');
    font-family: 'Gotham-bold';
    }
    @font-face {
    src: url('fontes/Gotham/GothamLight.ttf');
    font-family: 'Gotham-light';
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
    .botao-fale-com-especialista{
        background-color: rgb(147 187 194);
        border-radius: 20px;
    }
</style>

</html>

