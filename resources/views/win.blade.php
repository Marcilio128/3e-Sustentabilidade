@extends('layouts.main')

@section('title', '3E')

@section('content')

<section class="secTry">
    <div class="container">
        <div class="position">
            
            <h3 id="text">Você obteve uma pontuação entre 80 e 100 pontos,
                parabéns, considere adquirir uma hábitos mais sustentáveis, 
                e nunca pare de estudar sobre o mundo em que vivemos,
                que com estas ações você tem o potencial de mudar nossa realidade
</h3>
<button class="btnPoints" id="btnSubmit" onclick="ForTo(event)">Pontuação</button>



</div>
<lottie-player class="animateWin" src="https://assets2.lottiefiles.com/packages/lf20_EyJRUV.json"  background="transparent"  speed="1"    loop  autoplay></lottie-player>
    </div>
    <script src="./js/quiz.js"></script>

<script src="./js/question.js"></script>
@endsection