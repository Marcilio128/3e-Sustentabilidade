<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        
        <link rel="stylesheet" href="./css/reset.css">
        <link rel="stylesheet" href="./css/static.css">
        <link rel="stylesheet" href="./css/welcome.css">
        <link rel="stylesheet" href="./css/about.css">
        <link rel="stylesheet" href="./css/result.css">
        <link rel="stylesheet" href="./css/reset.css">
        <link rel="icon" href="./assets/3e-logo-color.ico">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

        <title>@yield('title')</title>
        
    </head>
    <body>
        <header class="sec-start">
            <div class="container">
                <nav class="menu" id="nav">
                    <a href="/"><img src="/assets/logo3e.png" class="logo-3e" alt=""></a>
                    
                    <button id="btn-mobile"> <span id="icon-menu"></span> </button>
                    <ul class="items" role="menu">
                    <li><a href="/">Inicio</a></li>
                        <li><a href="#Descarte">Descarte</a></li>
                        <li><a href="#Nossos_Projetos">Nossos Projetos</a></li>
                        <li><a href="/Sobre">Sobre</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        
        <main>@yield('content')</main>

    
        <footer class="rodape" id="rodapeTribute"> 
        <div id="linha-horizontal">
</div>
<div class="icon">
<img class="logo-3e" src="/assets/logo3e.png" alt=""> </img>
        <p style="color: white;">&copy; 3E Soluções</p>

        <a href="https://www.linkedin.com/company/3e-solucoes-em-eficiencia-energetica/?originalSubdomain=br"><img src="/assets/linkedin.png" class="linedin" alt=""></a>
        <a href="https://site.3esolucoes.com.br/"><img src="/assets/Link.png" class="link" alt=""></a>
        <a href="https://3esolucoes.gupy.io/"><img src="/assets/TrabalheConosco.png" class="wpp" alt=""></a>

    </div>
</footer>

    </body>
    <script src="./js/scriptStatic.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
<script src="https://www.drcode.com.br/nofollow/aviso-cookies/drcode.cookies.js"></script>
<script>
  avisoCookiesDrcode({
    message:'Utilizamos cookies para que você tenha a melhor experiência em nosso site. Para saber mais acesse nossa página de <a href="https://adoptfiles.s3.amazonaws.com/policy/2021-11-09T15%3A01%3A12.776Z_939c43ff-512b-4ec9-9fb8-a7fe56697ec7_3esolucoes-politica-de-privacidade.pdf" class="link"> Política de Privacidade </a>',
    backgroundColor:'rgba(255,255,255,0.95)',
    textColor:'rgb(203,86,22)',
    buttonBackgoundColor:'rgb(203,86,22)',
    buttonHoverBackgoundColor:'rgb(254, 204, 22)',
    buttonTextColor:'#ffffff'
})
</script>
</html>
