@extends('layouts.main')

@section('title', '3E')

@section('content')


<section class="secTry">
    <div class="container">
        <div class="position">
            
            <h3 class="PointsText" id="text">
                Você obteve uma pontuação entre 0 e 50 pontos,
                estude e considere adquirir uma hábitos mais sustentáveis
                que com estas ações você terá o potencial de mudar esta realidade
            </h3>
            <button class="btnPoints" id="btnSubmit" onclick="ForTo(event)">Click aqui para ver seus pontos</button></h3>

            
        </div>
        <img src="./assets/poluição.png" class="imgLose" alt="">
    </div>
<script src="./js/quiz.js"></script>
<script src="./js/question.js"></script>
@endsection
