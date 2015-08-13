<?php

    Class ScrabbleScore {

        function wordScore ($word) {

              $word = strtoupper ($word);
              $split_word = str_split($word);

              $letters = array("A"=> 1, "E"=> 1, "I"=> 1, "O"=> 1, "U"=> 1, "L"=> 1, "N"=> 1, "R"=> 1, "S"=> 1, "T"=> 1, "D"=> 2, "G"=> 2,);

              $score = 0;

              foreach ($letters as $key=>$value) {
                  if ((in_array($key, $split_word)) !==false){

                      $score+= $value;

                  }

              }

              if ($score === 0) {

                      $score = "Please enter a letter.";

              }

              $sum_score = strval($score);

                    return $sum_score;

              }



      }


?>
