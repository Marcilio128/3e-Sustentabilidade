@extends('layouts.main')

@section('title', '3E')

@section('content')
<section class="sec-welcomeOne">
    <div class="container">
        <div class="text-welcome">
            <h1>Conheça a importancia do descarte consciente</h1>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse 
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <lottie-player class="animation" src="https://assets9.lottiefiles.com/packages/lf20_mndgsj3k.json"  background="transparent"  speed="1"    loop  autoplay></lottie-player>
    </div>
</section>

<div class="sec-quiz">
    <a href="#" class="btn-quiz">Faça o nosso teste</a>
</div>

<h1 class="card-title">Conheça sobre o descarte correto</h1>

<section class="sec-welcometwo">
    <div class="container">
        <div class="card">
            <div class="box">
                <div class="content">
                    <img src="/assets/plastico-lixeira.png" alt="" class="cardP-img" srcset="">
                        <h3>Plastico</h3>
                         <p>Para materiais de plástico, a lixeira vermelha é a correta para o descarte. Nela você poderá descartar
                        materiais feitos de plástico</p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="box">
                <div class="content">
                    <img src="/assets/metal-lixeira.png" alt="" class="cardP-img" srcset="">
                        <h3>Metal</h3>
                        <p>Para materiais de metais, a lixeira amarela é a correta para o descarte. Nela você poderá descartar
                        materiais feitos de metais</p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="box">
                <div class="content">
                    <img src="/assets/papeis-lixeiras.png" alt="" class="cardP-img" srcset="">
                        <h3>Papeis</h3>
                        <p>Para materiais de papel, a lixeira azul é a correta para o descarte. Nela você poderá descartar
                        materiais feitos de papel</p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="box">
                <div class="content">
                    <img src="/assets/vidros-lixeiras.png" alt="" class="cardP-img" srcset="">
                        <h3>Vidros</h3>
                        <p>Para materiais de vidros, a lixeira azul é a correta para o descarte. Nela você poderá descartar
                        materiais feitos de vidros</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec-welcomethree">
    <div class="container">
        <div class="wave">    
            <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgb(203,86,22)" fill-opacity="1" d="M0,128L80,149.3C160,171,320,213,480,202.7C640,192,800,128,960,117.3C1120,107,1280,149,1360,170.7L1440,192L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>        </div>
        </div>
        <h1 class="title-welcomethree">Conheça Sobre nossos projetos</h1>
            <div class="content">    
                <div class="prj1">
                    <div class="text-prjt1">

                    <h2>Ecoenel</h2>
                    <p>Reconhecimento nacional e internacional, o projeto Ecoenel é um programa da Enel Ceará, que virou referência em ações 
                    de sustentabilidade. Lançado em 2007, o projeto visa promover a troca de resíduos recicláveis por bônus na conta de luz
                    nos estados do Ceará, Goiás e Rio de Janeiro. Formando uma rede de parcerias entre cliente, empresa e reciclador, 
                    procura  incentivar a população a adotar a separação de resíduos recicláveis em suas residências, proporcionando, 
                    em contrapartida, uma alternativa para contribuir na redução da conta de energia.</p>
                </div>
                <img class="slide1" src="/assets/slide1.jpg" alt="">

                </div>
        </div>
</section>
@endsection
