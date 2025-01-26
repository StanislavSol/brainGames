<?php

namespace BrainGames\Games\Gcd;

const START_NUMBER = 1;
const END_NUMBER = 100;

function implementConditionsGame()
{
    $numberOne = rand(START_NUMBER, END_NUMBER);
    $numberTwo = rand(START_NUMBER, END_NUMBER);
    $minNumber = min([$numberOne, $numberTwo]);
    $maxDelimiter = 1;

    for ($delimiter = 1; $delimiter <= $minNumber; $delimiter++) {
        if ($numberOne % $delimiter === 0 && $numberTwo % $delimiter === 0) {
            $maxDelimiter = $delimiter;
        }
    }
    $expression = "{$numberOne} {$numberTwo}";
    return [$expression, (string) $maxDelimiter];

}
