<?php
    class Scrabble
    {
        function scrabbleScore($letter)
        {
            $score1_letters = array("A", "E", "I", "O", "U", "L", "N", "R", "S", "T");
            $score2_letters = array("D", "G");

            switch ($letter) {
                case (in_array($letter, $score1_letters)):
                    return 1;

                case (in_array($letter, $score2_letters)):
                    return 2;
            }
        }
    }
?>
