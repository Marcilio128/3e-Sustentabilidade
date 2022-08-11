<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="./css/reset.css">
        <link rel="stylesheet" href="./css/static.css">
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
