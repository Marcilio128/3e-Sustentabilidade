<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500&display=swap" rel="stylesheet">

        
        <link rel="stylesheet" href="./css/reset.css">
        <link rel="stylesheet" href="./css/static.css">
        <link rel="stylesheet" href="./css/welcome.css">

        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

        <title>@yield('title')</title>
        
    </head>
    <body>
        <header class="sec-start">
            <div class="container">
                <nav class="menu" id="nav">
                    <img src="/assets/logo3e.png" class="logo-3e" alt="">
                    <button id="btn-mobile"> <span id="icon-menu"></span> </button>
                    <ul class="items" role="menu">
                        <li><a href="/">Inicio</a></li>
                        <li><a href="/">Descarte</a></li>
                        <li><a href="/">Coleta</a></li>
                        <li><a href="/">Sobre</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        
        <main>@yield('content')</main>

    </body>
    <script src="./js/scriptStatic.js"></script>
</html>
