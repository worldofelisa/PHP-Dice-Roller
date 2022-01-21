<?php

class Dice {
    /**
     * @return int
     */
    function diceRoller($numberOfFaces): int
    {
        return rand(1,$numberOfFaces);
    }

    function readCommand($arguments)
    {
        for ($x = 1; $x < count($arguments); $x++)
        {
            $exploded = explode("d",$arguments[$x]);
            for ($y = 1; $y <= $exploded[0]; $y++)
            {
                $this->diceRoller($exploded[1]);
            }

       }
    }
}
$rollADie = new Dice();
$rollADie->readCommand($argv);
//incomplete because it isn't outputting. Will be fixed in an upload later today.