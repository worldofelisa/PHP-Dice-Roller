<?php

class Dice {
    /**
     * @return int
     */
    function diceRoller($numberOfFaces): int
    {
        return rand(1,$numberOfFaces);
    }
}
$rollADie = new Dice();
echo $rollADie->diceRoller(20) . "\n";

