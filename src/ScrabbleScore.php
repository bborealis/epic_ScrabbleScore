<?php
    Class ScrabbleScore {

        function wordScore ($word) {

            // split



            $letters = array("A"=> 1, "E"=> 1, "I"=> 1, "O"=> 1, "U"=> 1, "L"=> 1, "N"=> 1, "R"=> 1, "S"=> 1, "T"=> 1);

            foreach ($letters as $letter=>$point) {
                if ($word === $letter) {
                    $score = $point;
                } else {
                    $score = "Please enter a letter.";
               }
            }

            $sum_score = strval($score);
            return $sum_score;
        }
    }

?>
