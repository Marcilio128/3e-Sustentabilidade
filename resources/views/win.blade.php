@extends('layouts.main')

@section('title', '3E')

@section('content')

<section class="sec-try">
    <div class="container">
        <div class="content">
            
            <h3 id="text">Sua pontuação está entre 80 e 100 pontos, parabéns você tem o potencial para ajudar a somar e melhorar o mundo em que vivemos!!!
            <button class="btnPoints" id="btnSubmit" onclick="ForTo(event)">Pontuação</button></h3>
            <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_EyJRUV.json"  background="transparent"  speed="1"   loop  autoplay></lottie-player>

        
        
        </div>
    </div>
    <script src="./js/quiz.js"></script>

<script src="./js/question.js"></script>
@endsection