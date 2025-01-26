<?php

namespace BrainGames\Games\Even;

const START_NUMBER = 1;
const END_NUMBER = 100;

function implementConditionsGame()
{
    $randomNumber = rand(START_NUMBER, END_NUMBER);
    if ($randomNumber % 2 === 0) {
        $correctAnswer = 'yes';
    } else {
        $correctAnswer = 'no';
    }

    return [$randomNumber, $correctAnswer];
}
