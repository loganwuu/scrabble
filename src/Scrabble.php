<?php
    class Scrabble
    {
        function scrabbleScore($letter)
        {
            $score1_letters = array("A", "E", "I", "O", "U", "L", "N", "R", "S", "T");
            switch ($letter) {
                case (in_array($letter, $score1_letters)):
                    return 1;

            }
        }
    }
?>
