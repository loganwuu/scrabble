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

        function test_score4_letters()
        {
            //Arrange
            $test_scrabbleScore = new Scrabble;
            $input = "F";

            //Act
            $result = $test_scrabbleScore->scrabbleScore($input);

            //Assert
            $this->assertEquals(4, $result);
        }

        function test_score5_letters()
        {
            //Arrange
            $test_scrabbleScore = new Scrabble;
            $input = "K";

            //Act
            $result = $test_scrabbleScore->scrabbleScore($input);

            //Assert
            $this->assertEquals(5, $result);
        }

        function test_score8_letters()
        {
            //Arrange
            $test_scrabbleScore = new Scrabble;
            $input = "J";

            //Act
            $result = $test_scrabbleScore->scrabbleScore($input);

            //Assert
            $this->assertEquals(8, $result);
        }

        function test_score10_letters()
        {
            //Arrange
            $test_scrabbleScore = new Scrabble;
            $input = "Q";

            //Act
            $result = $test_scrabbleScore->scrabbleScore($input);

            //Assert
            $this->assertEquals(10, $result);
        }

        function test_allCaps()
        {
            //Arrange
            $test_scrabbleScore = new Scrabble;
            $input = "a";

            //Act
            $result = $test_scrabbleScore->scrabbleScore($input);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_multipleLetters()
        {
            //Arrange
            $test_scrabbleScore = new Scrabble;
            $input = "AEI";

            //Act
            $result = $test_scrabbleScore->scrabbleScore($input);

            //Assert
            $this->assertEquals(3, $result);
        }
    }
?>
