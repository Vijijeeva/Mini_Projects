const questions = [
    {
        question: "What does JS stand for?",
        answers: [
            { text: "JavaSource", correct: false },
            { text: "JavaScript", correct: true },
            { text: "JustScript", correct: false },
            { text: "JQueryScript", correct: false }
        ]
    },
    {
        question: "Which keyword is used to declare a variable in JavaScript?",
        answers: [
            { text: "var", correct: true },
            { text: "int", correct: false },
            { text: "string", correct: false },
            { text: "float", correct: false }
        ]
    },
    {
        question: "Which function is used to print something in the console?",
        answers: [
            { text: "console.print()", correct: false },
            { text: "log.console()", correct: false },
            { text: "console.log()", correct: true },
            { text: "print()", correct: false }
        ]
    }
];

const questionContainer = document.getElementById("question-container");
const questionElement = document.getElementById("question");
const answerButtons = document.getElementById("answer-buttons");
const nextButton = document.getElementById("next-btn");
const scoreElement = document.getElementById("score");

let currentQuestionIndex = 0;
let score = 0;

function startQuiz() {
    currentQuestionIndex = 0;
    score = 0;
    scoreElement.textContent = Score: ${score};
    nextButton.style.display = "none";
    showQuestion();
}

function showQuestion() {
    resetState();
    let currentQuestion = questions[currentQuestionIndex];
    questionElement.innerText = currentQuestion.question;

    currentQuestion.answers.forEach(answer => {
        const button = document.createElement("button");
        button.innerText = answer.text;
        button.classList.add("btn");
        if (answer.correct) {
            button.dataset.correct = answer.correct;
        }
        button.addEventListener("click", selectAnswer);
        answerButtons.appendChild(button);
    });
}

function resetState() {
    nextButton.style.display = "none";
    while (answerButtons.firstChild) {
        answerButtons.removeChild(answerButtons.firstChild);
    }
}

function selectAnswer(e) {
    const selectedButton = e.target;
    const isCorrect = selectedButton.dataset.correct === "true";

    if (isCorrect) {
        selectedButton.classList.add("correct");
        score++;
        scoreElement.textContent = Score: ${score};
    } else {
        selectedButton.classList.add("wrong");
    }

    Array.from(answerButtons.children).forEach(button => {
        if (button.dataset.correct === "true") {
            button.classList.add("correct");
        }
        button.disabled = true;
    });

    nextButton.style.display = "block";
}

nextButton.addEventListener("click", () => {
    currentQuestionIndex++;
    if (currentQuestionIndex < questions.length) {
        showQuestion();
    } else {
        questionElement.innerText = Quiz Over! Your score: ${score}/${questions.length};
        answerButtons.innerHTML = "";
        nextButton.innerText = "Restart Quiz";
        nextButton.addEventListener("click", startQuiz);
    }
});

startQuiz();