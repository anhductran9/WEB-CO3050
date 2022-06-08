<?php
require "php_preprocess.php";
require "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal - Beginner</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="game.css">

</head>
<body>
    <?php require "header.php" ?>

    <script> var questions = [] </script>
    <?php
    if (isset($_GET['chosen_test'])) {
        $query_test = mysqli_query($conn, "SELECT * FROM testquestions WHERE test_id =" . $_GET['chosen_test']);
        $chosen_test = [];
        while ($row = $query_test->fetch_assoc()) {
            $idx = intval($row['question_id']);
            $chosen_test[] = [];
            $chosen_test[count($chosen_test) - 1]['question'] = $row['question_title'];
//            var_dump($chosen_test);

            $query_question_syntax = "SELECT * FROM answers WHERE test_id ="
                . $_GET['chosen_test'] . " AND question_id = ". $idx;
            $query_question_choice = mysqli_query($conn, $query_question_syntax);

            while ($choices = $query_question_choice->fetch_assoc()) {
                $current_choice_key = 'choice' . $choices['answer_id'];
                $chosen_test[count($chosen_test) - 1][$current_choice_key] = $choices['answer'];
                if ($choices['correct_answer'] == '1') {
                    $chosen_test[count($chosen_test) - 1]['answer'] = intval($choices['answer_id']);
                }
            }
        }
//        var_dump($chosen_test);
        $chosen_test = json_encode($chosen_test);
        echo "<script> questions = $chosen_test </script>";
        echo "<script> console.log({questions}) </script>";
    }
    ?>
    <div class="container">
        <div id="game" class="justify-center flex-column">
            <div id="hud">
                <div class="hud-item">
                    <p class="hud-prefix">Question</p>
                    <h1 class="hud-main-text" id="questionCounter"></h1>
                </div>
                <div class="hud-item">
                    <p class="hud-prefix">Score</p>
                    <h1 class="hud-main-text" id="score">0</h1>
                </div>
            </div>
            <h2 id="question">What is the answer to this question?</h2>
            <div id = "choice-container">
                <div class="choice-container">
                    <p class="choice-prefix">A</p>
                    <p class="choice-text" data-number="1">Choice 1</p>
                </div>
                <div class="choice-container">
                    <p class="choice-prefix">B</p>
                    <p class="choice-text" data-number="2">Choice 2</p>
                </div>
                <div class="choice-container">
                    <p class="choice-prefix">C</p>
                    <p class="choice-text" data-number="3">Choice 3</p>
                </div>
                <div class="choice-container">
                    <p class="choice-prefix">D</p>
                    <p class="choice-text" data-number="4">Choice 4</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        // const choicesContainer = document.getElementById('choice-container');


        const question = document.getElementById("question");
        const choices = Array.from(document.getElementsByClassName("choice-text"));
        const questionCounterText = document.getElementById("questionCounter");
        const scoreText = document.getElementById("score");
        let currentQuestion = {};
        let acceptingAnswers = true;
        var score;
        let questionCounter = 0;
        let availableQuestions = [];


        // CONTANTS
        const CORRECT_BONUS = 10;
        const MAX_QUESTIONS = 3;

        startGame = () => {
            questionCounter = 0;
            score = 0;
            availableQuestions = [...questions];
            getNewQuestion();
        };
        // if (availableQuestions.length === 0 || questionCounter >= questions.length) {
        //     let currenPath = window.location.pathname;
        //     currenPath = currenPath.split('/');
        //     currenPath[currenPath.length - 1] = `end.php?score=${score}`;
        getNewQuestion = () => {
            if (availableQuestions.length === 0 || questionCounter >= questions.length) {
                let scoreForm = document.createElement('form');
                scoreForm.setAttribute('method', 'post');
                scoreForm.setAttribute('action', 'submit.php');
                let scoreElement = document.createElement('input');
                scoreElement.setAttribute('name', 'score');
                scoreElement.setAttribute('value', score);
                scoreForm.appendChild(scoreElement);
                document.body.appendChild(scoreForm);
                scoreForm.submit();
            }
            questionCounter++;
            questionCounterText.innerText = questionCounter + "/" + questions.length;

            const questionIndex = Math.floor(Math.random() * availableQuestions.length);
            currentQuestion = availableQuestions[questionIndex];
            question.innerText = currentQuestion.question;

            choices.forEach(choice =>{
                const number = choice.dataset['number'];
                choice.innerText = currentQuestion['choice' + number];
            });

            availableQuestions.splice(questionIndex, 1);

            acceptingAnswers = true;
        };

        choices.forEach(choice => {
            choice.addEventListener('click', e => {
                if (!acceptingAnswers) return;
                console.log(choice.textContent);
                acceptingAnswers = false;
                const selectedChoice = e.target;
                const selectedAnswer = selectedChoice.dataset["number"];

                const classToApply = selectedAnswer == currentQuestion.answer ? "correct" : "incorrect";
                if (classToApply === "correct") {
                    incrementScore(CORRECT_BONUS);
                }
                selectedChoice.parentElement.classList.add(classToApply);

                setTimeout(() => {
                    selectedChoice.parentElement.classList.remove(classToApply);
                    getNewQuestion();
                }, 1000);
            });
        });

        incrementScore = num => {
            score += num;
            scoreText.innerText = score;
        };

        startGame();
    </script>
<!--    <script src="game.js"></script>-->
</body>
</html>