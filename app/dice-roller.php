<?php

class Dice {
    /**
     * @param $numberOfFaces
     * @return int
     */
    function rollResult($numberOfFaces): int
    {
        return rand(1,$numberOfFaces);
    }

    /**
     * @param $arguments
     * @return array
     */
    function diceInterpreter($arguments): array
    {
        $results = array();
        for ($x = 1; $x < count($arguments); $x++)
        {
            $diceParser = explode("d",$arguments[$x]);
            for ($y = 1; $y <= $diceParser[0]; $y++)
            {
               $results[$diceParser[1]][] = $this->rollResult($diceParser[1]);
                //Parser = breaks down data into smaller elements for easy translation
                // x= the amount of arguments inputted into the command line
                // y= counting the number of times the for loop is running
                // diceParser[0] is counting the number of dice
                // diceParser [1] is counting the number of faces and sending it through the dice roller method
            }
       }
        return $results;
    }
}

class DiceDisplay {
    /**
     * @param array $rollResults
     * @return void
     */
    public function render(array $rollResults)
    {
        foreach ($rollResults as $faces => $results)
        {

            foreach ($results as $result)
            {
                echo "I rolled a d$faces and it was a $result\n";
            }
        }
    }
}

$rollADie = new Dice();
$rollResults = $rollADie->diceInterpreter($argv);
$display = new DiceDisplay();
$display->render($rollResults);
