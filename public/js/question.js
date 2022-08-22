const question = document.querySelector('#question');
const choices = Array.from(document.querySelectorAll('.choice-text'));
const score = document.querySelector('#score');
const progressText = document.querySelector('#progressText');

let currentQuestion = {}
let acceptAnserws = true 
let points = 0
let questionCounter = 0
let AvaliableQuestions = []


let questions = [
    {
        question: 'Qual o descarte correto a ser feito em lixeiras vermelhas e amarelas?',
        choice1: 'Metal & Plastico',
        choice2: 'Metal & Papel',
        choice3: 'Papel & Vidros',
        choice4: 'Organicos & Papeis',
        answer: 1,
    },
    {
        question: 'Qual o projeto responsável por troca de residuos em desconstos na conta de energia?',
        choice1: 'Ecocelpa',
        choice2: 'Residuos & Energias',
        choice3: 'Ecoenel',
        choice4: 'Enel more',
        answer: 3,

    },
]

const Score_Points = 1;
const Max_Questions = 2;

startGame = () => {
    currentQuestion = 0;
    points = 0
    questionCounter = 0
    AvaliableQuestions = [...questions]
    getNewQuestion()
}

getNewQuestion = () => {
    if(AvaliableQuestions.length === 0 || questionCounter > Max_Questions) {
        localStorage.setTimeout('mostRecentScore', score)

        return window.location.assing('/end.html')
    }

    questionCounter++
    progressText.innerHTML = `Question ${questionCounter} of ${Max_Questions}` 
    ProgressBarFull = `${(questionCounter/Max_Questions) * 100}%`
    
    const questionIndex = Math.floor(Math.random() * AvaliableQuestions.length)
    currentQuestion = AvaliableQuestions[questionIndex]
    question.innerHTML = currentQuestion.question

    choices.forEach(choice => {
        const number = choice.dataset['number']
        choice.innerHTML = currentQuestion['choice' + number]
    })

    AvaliableQuestions.splice(questionIndex, 1)

    acceptAnserws = true
}

choices.forEach(choice => {
    choice.addEventListener('click', e => {
        if(!acceptAnserws) return

        acceptAnserws = false 
        const selectedchoice = e.target
        const selectedAnswer = selectedchoice.dataset['number']
        
        let classToApply = selectedAnswer == currentQuestion.answer ? 'correct' : 'incorret'

        if(classToApply === 'correct') {
            incrementScore(Score_Points)
        }
        selectedchoice.parentElement.classList.add(classToApply)

        setTimeout(() => {
            selectedchoice.parentElement.remove(classToApply)
            getNewQuestion()

        }, 1000)
    })
})

incrementScore = num => {
    score +=num
    scoreText.innerHTML = score
}

startGame()

