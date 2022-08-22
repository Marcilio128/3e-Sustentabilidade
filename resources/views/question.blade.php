<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/question.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions</title>
</head>
<body>
    <section class="questions">
        <div class="container">
            <div id="game">
                <div id="hud" class="itens">
                    <div class="hud-item">
                        <img src="/assets/3e-logo-color.png" alt="" srcset="">
                        <p id="progressText" class="hub-prefix">
                            Question
                        </p>
                        <div id="progressBar">
                            <div id="progressbarFull"></div>
                        </div>
                    </div>
                    <div class="hub-item">
                    <div id="question">Pergunta </div>

                    </div>
                </div>
                <div>
                    </div>
                    
                    <div class = "vertical"></div>
                    
                    
                    <div id="score">
                        <p>
                            Score
                        </p>
                        <h1 class="hub-main-text" id="score">
                            0/10
                        </h1>
                        <div class="choice-container">
                        <button class="choice-text" data-number="1">Escolha </button>
                        
                    </div>
                    <div class="choice-container">
                        <button class="choice-text" data-number="2">Escolha 2 </button>
                    </div>

                    <div class="choice-container">
                        <button class="choice-text" data-number="3">Escolha 3</button>
                    </div>

                    <div class="choice-container">
                        <button class="choice-text" data-number="4">Escolha 4</button>
                    </div>
                </div>
            </div>

        </div>
    </section>

</body>
<script src="./js/question.js"></script>
</html>