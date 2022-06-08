// // const choicesContainer = document.getElementById('choice-container');
//
//
// const question = document.getElementById("question");
// const choices = Array.from(document.getElementsByClassName("choice-text"));
// const questionCounterText = document.getElementById("questionCounter");
// const scoreText = document.getElementById("score");
// let currentQuestion = {};
// let acceptingAnswers = true;
// var score;
// let questionCounter = 0;
// let availableQuestions = [];
//
//
// // CONTANTS
// const CORRECT_BONUS = 10;
// const MAX_QUESTIONS = 3;
//
// startGame = () => {
//     questionCounter = 0;
//     score = 0;
//     availableQuestions = [...questions];
//     getNewQuestion();
// };
//
// getNewQuestion = () => {
//     if (availableQuestions.length === 0 || questionCounter >= questions.length) {
//         return window.location.assign("/end.php");
//     }
//     questionCounter++;
//     questionCounterText.innerText = questionCounter + "/" + questions.length;
//
//     const questionIndex = Math.floor(Math.random() * availableQuestions.length);
//     currentQuestion = availableQuestions[questionIndex];
//     question.innerText = currentQuestion.question;
//
//     choices.forEach(choice =>{
//         const number = choice.dataset['number'];
//         choice.innerText = currentQuestion['choice' + number];
//     });
//
//     availableQuestions.splice(questionIndex, 1);
//
//     acceptingAnswers = true;
// };
//
// choices.forEach(choice => {
//     choice.addEventListener('click', e => {
//         if (!acceptingAnswers) return;
//         console.log(choice.textContent);
//         acceptingAnswers = false;
//         const selectedChoice = e.target;
//         const selectedAnswer = selectedChoice.dataset["number"];
//
//         const classToApply = selectedAnswer == currentQuestion.answer ? "correct" : "incorrect";
//         if (classToApply === "correct") {
//             incrementScore(CORRECT_BONUS);
//         }
//         selectedChoice.parentElement.classList.add(classToApply);
//
//         setTimeout(() => {
//             selectedChoice.parentElement.classList.remove(classToApply);
//             getNewQuestion();
//         }, 1000);
//     });
// });
//
// incrementScore = num => {
//     score += num;
//     scoreText.innerText = score;
// };
//
// startGame();