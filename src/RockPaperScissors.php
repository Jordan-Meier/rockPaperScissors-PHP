<?php
    class RockPaperScissors
    {
        function playGame($input1, $input2)
        {
            if($input1 == "rock" && $input2 == "paper" || $input2 == "rock" && $input1 == "scissors" || $input1 == "paper" && $input2 == "scissors") {
                $result = "Player 2";
            } elseif ($input1 == "paper" && $input2 =="rock" || $input1 == "rock" && $input2 == "scissors" || $input1 == "scissors" && $input2 == "paper") {
                $result = "Player 1";
            } elseif ($input1 == $input2) {
                $result = "draw";
            }
            return $result;
        }


    }


?>
