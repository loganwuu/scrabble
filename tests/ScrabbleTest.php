<?php
    require_once "src/Scrabble.php";

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        function score_1()
        {
            //Arrange
            $test_scrabbleScore = new Scrabble;
            $input = "A";

            //Act
            $result = $test_scrabbleScore->scrabbleScore($input);

            //Assert
            $this->assertEquals(1, $result);
        }

        
    }
?>
