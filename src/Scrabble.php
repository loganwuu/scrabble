<?php
    class Scrabble
    {
        function scrabbleScore($letter)
        {
            $score1_letters = array("A", "E", "I", "O", "U", "L", "N", "R", "S", "T");
            $score2_letters = array("D", "G");
            $score3_letters = array("B", "C", "M", "P");
            $score4_letters = array("F", "H", "V", "W", "Y");

            switch ($letter) {
                case (in_array($letter, $score1_letters)):
                    return 1;

                case (in_array($letter, $score2_letters)):
                    return 2;

                case (in_array($letter, $score3_letters)):
                    return 3;

                case (in_array($letter, $score4_letters)):
                    return 4;
            }
        }
    }
?>
