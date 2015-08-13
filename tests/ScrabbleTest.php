<?php
    require_once "src/Scrabble.php";

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        function test_score_1()
        {
            //Arrange
            $test_scrabbleScore = new Scrabble;
            $input = "A";

            //Act
            $result = $test_scrabbleScore->scrabbleScore($input);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_score1_letters()
        {
            //Arrange
            $test_scrabbleScore = new Scrabble;
            $input = "E";

            //Act
            $result = $test_scrabbleScore->scrabbleScore($input);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_score2_letters()
        {
            //Arrange
            $test_scrabbleScore = new Scrabble;
            $input = "D";

            //Act
            $result = $test_scrabbleScore->scrabbleScore($input);

            //Assert
            $this->assertEquals(2, $result);
        }

        function test_score3_letters()
        {
            //Arrange
            $test_scrabbleScore = new Scrabble;
            $input = "B";

            //Act
            $result = $test_scrabbleScore->scrabbleScore($input);

            //Assert
            $this->assertEquals(3, $result);
        }
    }
?>
