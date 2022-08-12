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
            <div class="animation">
                <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_mndgsj3k.json"  background="transparent"  speed="1"    loop  autoplay></lottie-player>
            </div>
        </div>
</section>

<h1 class="card-title">Conheça sobre o descarte correto</h1>
<section class="sec-welcometwo">
    <div class="container">
        <div class="card">
            <div class="box">
                <div class="content">
                    <img src="/assets/plastico-lixeira.png" alt="" class="cardP-img" srcset="">
                    <h3>Plastico</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p>
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="box">
                <div class="content">
                    <img src="/assets/metal-lixeira.png" alt="" class="cardP-img" srcset="">
                    <h3>Metal</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p>
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="box">
                <div class="content">
                    <img src="/assets/papeis-lixeiras.png" alt="" class="cardP-img" srcset="">
                    <h3>Papeis</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p>
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="box">
                <div class="content">
                    <img src="/assets/vidros-lixeiras.png" alt="" class="cardP-img" srcset="">
                    <h3>Vidros</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p>
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
