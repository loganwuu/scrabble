<?php
    class Scrabble
    {
        function scrabbleScore($letters)
        {
            //Convert to uppercase letters string
            $uppercase_letters = mb_convert_case($letters, MB_CASE_UPPER, "UTF-8");

            //Turn multiple letters into an array
            $letters_array = str_split($uppercase_letters);

            //Scores for letters
            $score1_letters = array("A", "E", "I", "O", "U", "L", "N", "R", "S", "T");
            $score2_letters = array("D", "G");
            $score3_letters = array("B", "C", "M", "P");
            $score4_letters = array("F", "H", "V", "W", "Y");
            $score5_letters = array("K");
            $score8_letters = array("J"," X");
            $score10_letters = array("Q", "Z");

            // invalid characters
            $invalid_list = array();

            //Assign scores to letters and output the sum
            $total_score = 0;
            foreach ($letters_array as $letter) {
                switch ($letter) {
                    case "A":
                    case "E":
                    case "I":
                    case "O":
                    case "U":
                    case "L":
                    case "N":
                    case "R":
                    case "S":
                    case "T":
                        $total_score += 1;
                        break;
                    case "D":
                    case "G":
                        $total_score += 2;
                        break;
                    case "B":
                    case "C":
                    case "M":
                    case "P":
                        $total_score += 3;
                        break;
                    case "F":
                    case "H":
                    case "V":
                    case "W":
                    case "Y":
                        $total_score += 4;
                        break;
                    case "K":
                        $total_score += 5;
                        break;
                    case "J":
                    case "X":
                        $total_score += 8;
                        break;
                    case "Q":
                    case "Z":
                        $total_score += 10;
                        break;
                }
            }
            return $total_score;
        }
    }
?>
