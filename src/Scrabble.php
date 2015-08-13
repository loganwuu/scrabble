<?php
    class Scrabble
    {
        function scrabbleScore($letters)
        {
            $uppercase_letters = mb_convert_case($letters, MB_CASE_UPPER, "UTF-8");
            $score1_letters = array("A", "E", "I", "O", "U", "L", "N", "R", "S", "T");
            $score2_letters = array("D", "G");
            $score3_letters = array("B", "C", "M", "P");
            $score4_letters = array("F", "H", "V", "W", "Y");
            $score5_letters = array("K");
            $score8_letters = array("J"," X");
            $score10_letters = array("Q", "Z");

            switch ($uppercase_letters) {
                case (in_array($uppercase_letters, $score1_letters)):
                    return 1;

                case (in_array($uppercase_letters, $score2_letters)):
                    return 2;

                case (in_array($uppercase_letters, $score3_letters)):
                    return 3;

                case (in_array($uppercase_letters, $score4_letters)):
                    return 4;

                case (in_array($uppercase_letters, $score5_letters)):
                    return 5;

                case (in_array($uppercase_letters, $score8_letters)):
                    return 8;

                case (in_array($uppercase_letters, $score10_letters)):
                    return 10;
            }
        }
    }
?>
