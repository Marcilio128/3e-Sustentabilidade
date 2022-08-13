@extends('layouts.main')

@section('title', '3E')

@section('content')
<section class="sec-welcomeOne">
    <div class="container">
        <div class="text-welcome">
        <h1>Você conhece a importancia do descarte conciênte?</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
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
@endsection
