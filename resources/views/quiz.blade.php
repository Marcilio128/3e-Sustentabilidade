@section('title', 'Quiz-3E')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">

    <link rel="stylesheet" href="./css/registerQuiz.css">


    <title>Document</title>
</head>
<body>
<div class="bola01"></div>
<div class="bola02"></div>

<div class="bola03"></div>
<div class="bola04"></div>

<div class="bola09"></div>
<div class="bola10"></div>

<div class="bola11"></div>
<div class="bola12"></div>
<section class="sec-quiz">
    <div class="container">




        <div class="card-register">

            <img src="/assets/3e-logo-color.png" alt="">
                <div class="box">
                    <form>
	                    <div class="input-container">
                             <input type="text" id="input" required=""/>
		                     <label>Digite seu nome</label>		
	                        </div>
                            <a  id="btnSubmit" class="btn" onclick="location.href='/Question'" >Começar</button></a>
                </div>
        </div>


    </section>
    
    <div class="bola05"></div>
    <div class="bola06"></div>

    <div class="bola07"></div>
    <div class="bola08"></div>

</body>
<script src="/js/quiz.js" defer></script>

</html>
