@extends('layouts.main')

@section('title', '3E')

@section('content')



<section class="secTry">
    <div class="container">
        <div class="position">
            
            <h3 id="text">
                Você obteve uma pontuação entre 50 e 80 pontos,
                estude e considere adquirir uma hábitos mais sustentáveis
                que com estas ações você terá o potencial de mudar esta realidade que vivemos
            </h3>
            <button class="btnPoints" id="btnSubmixt" onclick="ForTo(event)">Pontuação</button></h3>

            
            
            
        </div>
        <lottie-player class="animate" src="https://assets7.lottiefiles.com/packages/lf20_xdhlxru1.json"  speed="1"    loop  autoplay></lottie-player>
    </div>
</section>
<script src="./js/quiz.js"></script>

<script src="./js/question.js"></script>
@endsection