@extends('layouts.main')

@section('title', '3E')

@section('content')


<section class="sec-try">
    <div class="container">
        <div class="content">
            
            <h3 id="text">Sua pontuação está entre 0 e 50 pontos, com mais conhecimento você tem potencial de mudar o mundo
            <button class="btnPoints" id="btnSubmit" onclick="ForTo(event)">Pontuação</button></h3>
            <img src="./assets/poluição.png" class="imgLose" alt="">

        
        
        </div>
    </div>
    <script src="./js/quiz.js"></script>

<script src="./js/question.js"></script>
@endsection
