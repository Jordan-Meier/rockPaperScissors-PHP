<?php

    require_once "src/RockPaperScissors.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {

        function test_rockrock_paperpaper_scissorscissor()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $input1 = "rock";
            $input2 = "scissors";
            $input3 = "paper";

            //Act
            $result1 = $test_RockPaperScissors->playGame($input1, $input1);
            $result2 = $test_RockPaperScissors->playGame($input2, $input2);
            $result3 = $test_RockPaperScissors->playGame($input3, $input3);

            //Assert
            $this->assertEquals("draw", $result1);
            $this->assertEquals("draw", $result2);
            $this->assertEquals("draw", $result3);
        }
        // function test_rock_scissors()
        // {
        //     //Arrange
        //     $test_RockPaperScissors = new RockPaperScissors;
        //     $input1 = "rock";
        //     $input2 = "scissors";
        //
        //     //Act
        //     $result = $test_RockPaperScissors->playGame($input1, $input2);
        //
        //     //Assert
        //     $this->assertEquals("Player 1", $result);
        // }

    }

?>
