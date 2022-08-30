@extends('layouts.main')

@section('title', '3E')

@section('content')


<section class="sec-try">
    <div class="container">
        <div class="position">
            
            <h3 id="text">Sua pontuação está entre 0 e 50 pontos, com mais conhecimento você tem potencial de mudar o mundo
            <div class="box">
                 <div class="box-circle">
                    <svg class="Circle">
                        <circle cx="70" cy="70" r="70"></circle>
                        <circle cx="70" cy="70" r="70"></circle>
                    </svg>
                </div>
              
            </div>
            <div class="number">
                    <h2>70%</h2>
                </div>
            <button class="btnPoints" id="btnSubmit" onclick="ForTo(event)">Click aqui para ver seus pontos</button></h3>
            <img src="./assets/poluição.png" class="imgLose" alt="">

        </div>
    </div>
<script src="./js/quiz.js"></script>
<script src="./js/question.js"></script>
@endsection
