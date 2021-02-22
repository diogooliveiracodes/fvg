<!DOCTYPE html>
<html lang="en">
<head>
    {{-- VueJS App --}}
    <script src="js/app.js"></script>

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- VueJS --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/vue@2"></script> --}}

    {{-- Scripts  --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    {{-- Styles  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="./css/landing-page.min.css" rel="stylesheet">

    {{-- Fontawsome --}}
    <script src="https://kit.fontawesome.com/9f90449050.js" crossorigin="anonymous"></script>
</head>
<body class="m-0 p-0">
    <div class="m-0 p-0" id="app">

    @yield('content')

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
    @font-face {
    src: url('fontes/Gotham/GothamLight.ttf');
    font-family: 'Gotham-light';   
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
        border-radius: 15px;
        background-color: rgb(147 187 194);
        border: 1px solid rgb(147 187 194);
        font-family: 'Gotham-bold';
        font-size: 1rem;
        padding-left: 1rem;
        padding-right: 1rem;
        margin-top: 10px;
        color: rgb(61 57 53);
    }
</style>

</html>

