<?php

namespace BrainGames\Games\Progression;

const START_NUMBER = 1;
const END_NUMBER = 100;
const COUNT_NUM_IN_PROGRESSION = 10;
const START_COUNT = 0;

function implementConditionsGame()
{
    $startNumber = rand(START_NUMBER, END_NUMBER);
    $progressiveMeaning = rand(START_NUMBER, END_NUMBER);
    $progression = [];

    for ($count = START_COUNT; $count < COUNT_NUM_IN_PROGRESSION; $count++) {
        $progression[] = $startNumber;
        $startNumber += $progressiveMeaning;
    }
    $findIndexRandomNumber = array_rand($progression);
    $corretsAnswer = $progression[$findIndexRandomNumber];
    $progression[$findIndexRandomNumber] = '..';
    $progressionString = implode(' ', $progression);
    return [$progressionString, (string) $corretsAnswer];


}
