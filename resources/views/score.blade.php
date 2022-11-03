<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/score.css">

</head>

<body BACKGROUND="./assets/3emural.jpg" class="background">



    <section class="sec-tabela">
        <div class="container">
            <div class="card" id="card">
                <div class="start">
                    <img src="./assets/3e-logo-color.png" class="imglogo" alt="" srcset="">
                    <h1>Rank</h1>

                </div>


                <div class="container">
                    <table border="1">
                        <thead>
                            <tr>
                                <th>Posição</th>
                                <th>Nome</th>
                                <th>Pontos</th>
                                <th>Tempo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $a = '0';
                            @endphp
                            @foreach ($ranks as $rank)
                                <tr>
                                    {{-- posicionamento crescente da exibição dos dados --}}
                                    <td>@php
                                        $a++;
                                        echo "$a"."°";
                                    @endphp</td>
                                    <td>{{ $rank->nome }}</td>
                                    <td>{{ $rank->pontos }}</td>
                                    <td>{{ $rank->tempo }}</td>
                                    {{-- exibição de dados do Banco --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <a href="/" class="btn">Volte ao início</a>

            </div>

        </div>
    </section>
</body>
