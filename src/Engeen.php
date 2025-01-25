<?php

use function cli\line;
use function cli\prompt;

const MAX_COUNT_ROUND = 3;
const START_ROUND = 0;

function engeen($rulesGame, $questionContent, $correctAnswer)
{
    line("Welcome to the Brain Game!");
    $name = prompt("May I have your name?");
    line("Hello, %s!", $name);
    line($rulesGame);

    for ($currentRound=START_ROUND; $currentRound<MAX_COUNT_ROUND; $currentRound++) {
        line("Question: {$questionContent}");
        $answer = prompt("Your answer: ");

        if ($answer === $correctAnswer) {
            line("Correct!");
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.\nLet's try again, {$name}!");
            break;
        }
    }

    if ($currentRound === MAX_COUNT_ROUND) {
        line("Congratulations, {$name}!");
    }
}
