

let instrucoes = document.querySelector('#instrucoes')
let aviso = document.querySelector('#aviso')
let pontos = 0 // pontos para o placar
let placar = 0 // placar

let closemobilemodal = document.querySelector("#closeInMobile")
let openModalButton = document.querySelectorAll(".open-modal");
let closeModalButton = document.querySelector("#close-modal");
let modal = document.querySelector("#modal");
let fade = document.querySelector("#mostrar");
let toggleModal = () => {
    modal.classList.toggle("esconder");
    fade.classList.toggle("esconder");
};

for (var i = 0; i < openModalButton.length; i++) {
    openModalButton[i].addEventListener("click", () => toggleModal());
};

  [closeModalButton, fade, closemobilemodal].forEach((el) => {
    el.addEventListener("click", () => toggleModal());
});


// PERGUNTA
let numQuestao = document.querySelector('#numQuestao')
let pergunta = document.querySelector('#pergunta')

// ALTERNATIVAS
let a = document.querySelector('#a')
let b = document.querySelector('#b')
let c = document.querySelector('#c')
let d = document.querySelector('#d')

// article com a class questoes
let articleQuestoes = document.querySelector('.questoes')
// ol li com as alternativas
let alternativas = document.querySelector('#alternativas')



const q0 = {
    numQuestao: 0,
    pergunta: "Pergunta",
    alternativaA: "Alternativa A",
    alternativaB: "Alternativa B",
    alternativaC: "Alternativa C",
    alternativaD: "Alternativa D",
    correta: "0",
    motivo: "Porque"
}

const q1 = {
    numQuestao: 1,
    pergunta: "O descarte de plástico e metal devem ser feitos, em lixeiras de cores:",
    alternativaA: "Azul & Verde",
    alternativaB: "Vermelha & Amarela",
    alternativaC: "Verde & Marrom",
    alternativaD: "Branca & Laranja",
    correta: "Vermelha & Amarela",
    motivo: "Lixeiras vermelhas e amarelas estão ligadas, respectivamente, ao descarte de plástico e metal."

}

const q2 = {
    numQuestao: 2,
    pergunta: "O projeto responsável por trocar resíduos recicláveis por bônus na conta de luz: ",
    alternativaA: "Bônus eficiente",
    alternativaB: "Enel +",
    alternativaC: "Luz e vida",
    alternativaD: "Eco",
    correta: "Eco",
    motivo: "Este projeto foi criado visando diminuir o gasto por energia, e junto diminuindo a quantidade de resíduos descartados incorretamente e ajudar quem precisa."


}

const q3 = {
    numQuestao: 3,
    pergunta: "Qual a importância da sustentabilidade?",
    alternativaA: "Conservar o meio ambiente para manter a Terra saudável e que futuras gerações tenham o melhor ambiente para morar",
    alternativaB: "Preservar a natureza para que o homem possa usar para ações industriais futuras",
    alternativaC: "Ajudar a manter as pessoas nas suas casas da cidade",
    alternativaD: "Conservar o meio ambiente para ajudar a evitar única e exclusivamente o efeito estufa",
    correta: "Conservar o meio ambiente para manter a Terra saudável e que futuras gerações tenham o melhor ambiente para morar",
    motivo: "Porque a sustentabilidade busca a preservação ambiental."
}

const q4 = {
    numQuestao: 4,
    pergunta: "Quais das opções abaixo não é uma forma sustentável de gerar energia elétrica?",
    alternativaA: "Eólica",
    alternativaB: "Petróleo",
    alternativaC: "Oceânica",
    alternativaD: "biomassa",
    correta: "Petróleo",
    motivo: "Na produção de energia por petróleo, é emitido gases tóxicos para a atmosfera e, consequentemente, para a natureza."
}

const q5 = {
    numQuestao: 5,
    pergunta: "Quais são os benefícios da sustentabilidade?",
    alternativaA: "Diminuir a obesidade",
    alternativaB: "Evitar que o homem desmate árvores",
    alternativaC: "Evitar vários problemas ambientais que podem acarretar em grandes desastres no futuro",
    alternativaD: "Causar peso na consciência nos praticantes de atos contra o meio ambiente",
    correta: "Evitar vários problemas ambientais que podem acarretar em grandes desastres no futuro",
    motivo: 'Porque a sustentabilidade visa justamente evitar ao máximo que nossa natureza "suma" para futuras gerações.'
}

const q6 = {
    numQuestao: 6,
    pergunta: "O que são produtos biodegradáveis?",
    alternativaA: "Objetos feitos com material reciclável",
    alternativaB: "Produtos recicláveis ",
    alternativaC: "Produtos compostos por elementos orgânicos que se decompõem facilmente",
    alternativaD: "Categoria de produtos que são renováveis, ou seja, que não acaba",
    correta: "Produtos compostos por elementos orgânicos que se decompõem facilmente",
    motivo: "Produtos biodegradáveis são produtos que se decompõem por algum agente biológico, por exemplo um corpo de um animal se decompondo por bactérias."
}

const q7 = {
    numQuestao: 7,
    pergunta: "Qual das opções abaixo é uma ação (ou processo) essencial para a reciclagem?",
    alternativaA: "Acúmulo de matéria prima",
    alternativaB: "Coleta Seletiva",
    alternativaC: "Replantio de árvore recém cortada",
    alternativaD: "Incineração",
    correta: "Coleta Seletiva",
    motivo: "Pois uma das etapas da Coleta Seletiva é reciclar o que der e precisar reciclar."
}

const q8 = {
    numQuestao: 8,
    pergunta: "O que é coleta seletiva?",
    alternativaA: "Processo de separação e coleta de resíduos sólidos para reciclagem",
    alternativaB: "Entrega de todo lixo reciclável para catadores de reciclagem",
    alternativaC: "Reaproveitamento de Recicláveis",
    alternativaD: "Coleta de lixos recicláveis",
    correta: "Processo de separação e coleta de resíduos sólidos para reciclagem",
    motivo: "Porque o nome coleta vem de coletar os resíduos, e seletiva de selecionar, basicamente selecionando os resíduos para suas respectivas finalidades."
}
const q9 = {
    numQuestao: 9,
    pergunta: "Qual é a consequência de não priorizarmos o desenvolvimento sustentável dos seres humanos?",
    alternativaA: "Não existirá lixeiras recicláveis",
    alternativaB: "Apenas as plantações irão perecer",
    alternativaC: "Há a tendência dos recursos naturais se esgotarem e de haver a extinção de seres vivos",
    alternativaD: "As empresas irão lucrar mais",
    correta: "Há a tendência dos recursos naturais se esgotarem e de haver a extinção de seres vivos",
    motivo: "Porque o desenvolvimento sustentável visa principalmente a preservação do ambiente para futuras gerações terem o que precisam para sobreviver."
}
const q10 = {
    numQuestao: 10,
    pergunta: "Quais desses meios de transporte não polui o ambiente?",
    alternativaA: "Bicicleta",
    alternativaB: "Navio",
    alternativaC: "Carro a combustão",
    alternativaD: "Avião",
    correta: "Bicicleta",
    motivo: "Porque diferente dos automóveis, a Bicicleta não utiliza de combustíveis fósseis para funcionar."
}
// CONSTANTE COM UM ARRAY DE OBJETOS COM TODAS AS QUESTOES
const questoes = [q0, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10]

let numero = document.querySelector('#numero')
let total = document.querySelector('#total')

numero.textContent = q1.numQuestao



let totalDeQuestoes = (questoes.length) - 1
total.textContent = totalDeQuestoes

// MONTAR A 1a QUESTAO COMPLETA, para iniciar o Quiz
numQuestao.textContent = q1.numQuestao
pergunta.textContent = q1.pergunta
a.textContent = q1.alternativaA
b.textContent = q1.alternativaB
c.textContent = q1.alternativaC
d.textContent = q1.alternativaD


// CONFIGURAR O VALUE INICIAL DA 1a QUESTAO COMPLETA
a.setAttribute('value', '1A')
b.setAttribute('value', '1B')
c.setAttribute('value', '1C')
d.setAttribute('value', '1D')

// PARA MONTAR AS PROXIMAS QUESTOES
function proximaQuestao(nQuestao) {
    numero.textContent = nQuestao
    numQuestao.textContent = questoes[nQuestao].numQuestao
    pergunta.textContent = questoes[nQuestao].pergunta
    a.textContent = questoes[nQuestao].alternativaA
    b.textContent = questoes[nQuestao].alternativaB
    c.textContent = questoes[nQuestao].alternativaC
    d.textContent = questoes[nQuestao].alternativaD
    a.setAttribute('value', nQuestao + 'A')
    b.setAttribute('value', nQuestao + 'B')
    c.setAttribute('value', nQuestao + 'C')
    d.setAttribute('value', nQuestao + 'D')

}

function bloquearAlternativas() {
    a.classList.add('bloqueado')
    b.classList.add('bloqueado')
    c.classList.add('bloqueado')
    d.classList.add('bloqueado')

}

function desbloquearAlternativas() {
    a.classList.remove('bloqueado')
    b.classList.remove('bloqueado')
    c.classList.remove('bloqueado')
    d.classList.remove('bloqueado')

}

function verificarSeAcertou(nQuestao, resposta) {

    let numeroDaQuestao = nQuestao.value


    let respostaEscolhida = resposta.textContent

    let certa = questoes[numeroDaQuestao].correta
    let porque = questoes[numeroDaQuestao].motivo


    if (respostaEscolhida == certa) {
        pontos += 10
        show.innerText = "Você Acertou:  " + certa + " é a resposta correta";
        explicação.innerText = porque;
    }
    else {
        pontos += -10


        show.innerText = "Você Errou:  " + certa + " é a resposta correta";
        explicação.innerText = porque;
    }
    // atualizar placar
    placar = pontos
    instrucoes.textContent = "Pontos " + placar

    // bloquear a escolha de opcoes
    bloquearAlternativas()

    setTimeout(function () {
        //respostaEsta.textContent = '...'
        proxima = numeroDaQuestao + 1

        if (proxima > totalDeQuestoes) {
            fimDoJogo()
        } else {
            proximaQuestao(proxima)
        }
    }, 250)
    desbloquearAlternativas()
}

function fimDoJogo() {
    instrucoes.textContent = "Fim de Jogo!"
    numQuestao.textContent = ""

    let pont = ''
    pontos == 0 ? pont = 'ponto' : pont = 'pontos'

    pergunta.textContent = "Você conseguiu " + pontos + " " + pont

    aviso.textContent = "Você conseguiu " + pontos + " " + pont

    a.textContent = ""
    b.textContent = ""
    c.textContent = ""
    d.textContent = ""

    a.setAttribute('value', '0')
    b.setAttribute('value', '0')
    c.setAttribute('value', '0')
    d.setAttribute('value', '0')

    // OCULTAR O ARTICLE DA QUESTAO
    articleQuestoes.style.display = 'none'

    setTimeout(function () {

        if (pontos < 50) {
            // salvamento de cookie para envio pro banco de dados
            document.cookie = "ponto" + "=" + pontos + "; path: /;"
            window.location.href = "/ls"

        }
        else if (pontos < 90) {
            document.cookie = "ponto" + "=" + pontos + "; path: /;"
            window.location.href = "/ta"

        }
        else if (pontos >= 90) {
            document.cookie = "ponto" + "=" + pontos + "; path: /;"
            window.location.href = "/wn"

        }
        else {
            window.location.href = "/"

        }
    }, 1000)
}
