<?php

namespace BrainGames\Games\Calc;

const START_NUMBER = 1;
const END_NUMBER = 100;
const OPERATIONS = ["+", "-", "*"];

function implementConditionsGame()
{
    $operatorLeft = rand(START_NUMBER, END_NUMBER);
    $operatorRight = rand(START_NUMBER, END_NUMBER);
    $randIndexOperation = array_rand(OPERATIONS);
    $operation = OPERATIONS[$randIndexOperation];

    switch ($operation) {
        case "+";
            $resultExpression = $operatorLeft + $operatorRight;
            break;
        case "-";
            $resultExpression = $operatorLeft - $operatorRight;
            break;
        case "*";
            $resultExpression = $operatorLeft * $operatorRight;
            break;
    }

    $expression = "{$operatorLeft} {$operation} {$operatorRight}";

    return [$expression, (string) $resultExpression];
}
