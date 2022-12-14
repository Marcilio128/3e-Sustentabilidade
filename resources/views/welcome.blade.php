@extends('layouts.main')

@section('title', '3E')

@section('button')
<link rel="stylesheet" href="./css/DarkMode.css">

    
<li><a href="#Descarte">Descarte</a></li>
<li><a href="#Nossos_Projetos">Nossos Projetos</a></li>

@endsection

@section('content')


<div data-aos="zoom-in">
<section href="#inicio" class="sec-welcomeOne">
    <div class="container">
        <div class="text-welcome paragraph wrap">
            <h1>Conheça a importância do descarte consciente</h1>
            <p>
            A sustentabilidade visa a preservação e manutenção do meio ambiente e dos seres vivos, através de atitudes que diminuem o impacto gerado pelos seres humanos. E é de suma importância a sua presença no mundo para que seja possível manter a vida na Terra, para que futuramente nossas crianças tenham uma natureza para apreciar, um planeta para morar. A 3e Soluções também vem realizando ações sustentáveis para deixar o nosso planeta melhor no presente, para se manter no futuro.
            </p>
        </div>


        <lottie-player class="animation" src="./assets/Polution.json" background="transparent" fill="transparent" speed="1"    loop  autoplay></lottie-player>
    </div>
</section>

<div class="sec-quiz">
    <a href="/Quiz3E" id="Descarte" class="btn-quiz">Faça o nosso teste</a>
</div>
</div>
<a href="#Descarte"><img class="SetaPBaixo" src="/assets/SetaPBaixo.png" alt=""></a>

<div data-aos="flip-left">


<h1  class="card-title">Conheça sobre o descarte correto</h1>
<section class="sec-welcometwo">
        <div class="container">


        <div class="card">
            <div class="box">
                <div class="content">
                    <img src="/assets/plastico-lixeira.png" alt="" class="cardP-img" srcset="">
                        <h3>Plásticos</h3>
                         <p>Para materiais de plástico, a lixeira vermelha é a correta para o descarte. Nela você poderá descartar
                        materiais feitos de plástico</p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="box">
                <div class="content">
                    <img src="/assets/metal-lixeira.png" alt="" class="cardP-img" srcset="">
                        <h3>Metais</h3>
                        <p>Para materiais de metais, a lixeira amarela é a correta para o descarte. Nela você poderá descartar
                        materiais feitos de metais</p>
                </div>
            </div>
        </div>



        <div class="card">
            <div class="box">
                <div class="content">
                    <img src="/assets/papeis-lixeiras.png" alt="" class="cardP-img" srcset="">
                        <h3>Papéis</h3>
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
                        <p>Para materiais de vidros, a lixeira verde é a correta para o descarte. Nela você poderá descartar
                        materiais feitos de vidros</p>
                </div>
            </div>
        </div>
    </div>
</section>
</div>



</p>
</div>


<div data-aos="fade-up">


<section class="sec-welcomethree">
    <div class="container">
        <div class="wave">    
            <svg id="Nossos_Projetos"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgb(203,86,22)" fill-opacity="1" d="M0,128L80,149.3C160,171,320,213,480,202.7C640,192,800,128,960,117.3C1120,107,1280,149,1360,170.7L1440,192L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>        </div>


        <h1 class="title-welcomethree">Conheça Sobre nossos projetos</h1>
            <div class="content">    
                
                <div class="Ecoenel">
                    <div class="text-Ecoenel">
                        <h2>Eco</h2>
                        <p>Reconhecimento nacional e internacional, o projeto Eco é um programa, que virou referência em ações 
                        de sustentabilidade. O projeto visa promover a troca de resíduos recicláveis por bônus na conta de luz
                        nos estados. Formando uma rede de parcerias entre cliente, empresa e reciclador, 
                        procura  incentivar a população a adotar a separação de resíduos recicláveis em suas residências, proporcionando, 
                        em contrapartida, uma alternativa para contribuir na redução da conta de energia.</p>
                    </div>
                    <img class="Ecoenel-img" src="/assets/Ecoenel01.jpg" alt="">
                </div>

            

            <div class="prj2">
                <img class="Ecocelpa" src="/assets/LuzSolidaria.jpg" alt="">
                    <div class="text-Ecocelpa">
                        <h2>Luz Solidária</h2>
                        <p>Lançado em 2009 o Projeto Luz Solidária da Enel tem o objetivo de estimular o uso de equipamentos mais eficientes através de descontos na troca de eletrodomésticos antigos, por novos e mais eficientes.
                            Em lojas conveniadas, os clientes que participam do projeto encontram a oportunidade de se beneficiar com a economia de energia e equipamentos novos a preços acessíveis, e o mais importante, ajudar um projeto social.</p>
                    </div>
            </div>

            <div class="RecicleMais">
                <div class="text-RecicleMais">
                    <h2>Recicle Mais, Pague Menos</h2>
                    <p>Em execução desde 2012 o Projeto Recicle Mais, Pague Menos é uma iniciativa da Eletropaulo que tem como objetivo a conscientização da mudança de
                        hábito da população em relação ao descarte correto dos materiais recicláveis, além da troca de resíduos recicláveis por desconto na conta
                         de energia elétrica.</p>
                    </div>
                    <img class="RecicleMais-img" src="/assets/RecicleMais.jpg" alt="">
            </div>
        </div>
</section>
</div>

@endsection
