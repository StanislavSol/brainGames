<?php

namespace BrainGames\Games\Prime;

const START_NUMBER = 1;
const END_NUMBER = 100;
const START_COUNT_DIVIDERS = 0;
const INCREASE_COUNTER = 1;
const COUNT_DIV_PRIME_NUM = 2;

function implementConditionsGame()
{
    $randomNumber = rand(START_NUMBER, END_NUMBER);
    $countDividers = START_COUNT_DIVIDERS;

    for ($delimeter = START_NUMBER; $delimeter <= $randomNumber; $delimeter++) {
        if ($randomNumber % $delimeter === 0) {
            $countDividers += INCREASE_COUNTER;
        }
    }
    if ($countDividers === COUNT_DIV_PRIME_NUM) {
        $correctAnswer = 'yes';
    } else {
        $correctAnswer = 'no';
    }

    return [$randomNumber, $correctAnswer];
}
