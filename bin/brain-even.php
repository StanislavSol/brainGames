<?php

const MAX_COUNT_ROUND = 3;
const START_ROUND = 0;

function game()
{
    $randomNumber = rand(1, 1000);
    if ($randomNumber % 2 === 0) {
        $correctAnswer = 'yes';   
    } else {
        $correctAnswer = 'no';
    }

    $rulesGame = "Answer \"yes\" if the number is even, otherwise answer \"no\".";
    engeen($rulesGame, $randomNumber, $correctAnswer);
}

game();
