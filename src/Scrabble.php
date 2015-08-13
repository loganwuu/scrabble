<?php
    class Scrabble
    {
        function scrabbleScore($letters)
        {
            //Allow alphabetic character(s) only
            if (empty($letters)) {
                return "Please enter a letter or combination of letters.";
            } elseif (!ctype_alpha($letters)) {
                return "Sorry, please only enter alphabetic letters.";
            } elseif (strlen($letters) > 7) {
                return "Sorry, please only enter 7 letters or less.";
            }

            //Convert to uppercase letters string
            $uppercase_letters = mb_convert_case($letters, MB_CASE_UPPER, "UTF-8");

            //Turn multiple letters into an array
            $letters_array = str_split($uppercase_letters);

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
