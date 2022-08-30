@extends('layouts.main')

@section('title', '3E')

@section('content')



<section class="sec-try">
    <div class="container">
        <div class="position">
            
            <h3 id="text">Sua pontuação está entre 50 e 80 pontos, com mais conhecimento você tem potencial de mudar o mundo
            <button class="btnPoints" id="btnSubmit" onclick="ForTo(event)">Pontuação</button></h3>
            <lottie-player class="animate" src="https://assets7.lottiefiles.com/packages/lf20_xdhlxru1.json"  speed="1"    loop  autoplay></lottie-player>

        
        
        </div>
    </div>
</section>
<script src="./js/quiz.js"></script>

<script src="./js/question.js"></script>
@endsection