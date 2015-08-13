<?php

    require_once "src/ScrabbleScore.php";

    class ScrabbleScoreTest extends PHPUnit_Framework_TestCase {

       //1. Enter "A" and get back "1".
       function test_wordScore_oneLetter() {
           $test_ScrabbleScore = new ScrabbleScore;
           $input = "A";

           $result = $test_ScrabbleScore->wordScore($input);

           $this->assertEquals("1", $result);
       }

       //2. Enter "1" and get back "Please enter a letter."
       function test_wordScore_nonLetter() {
           $test_ScrabbleScore = new ScrabbleScore;
           $input = "1";

           $result = $test_ScrabbleScore->wordScore($input);

           $this->assertEquals("Please enter a letter.", $result);
       }

       //3. Enter "a" and get back "1"."
       function test_wordScore_lowerCaseLetter() {
           $test_ScrabbleScore = new ScrabbleScore;
           $input = "a";

           $result = $test_ScrabbleScore->wordScore($input);

           $this->assertEquals("1", $result);
       }
       //4. Enter "to" and get back "2".
       function test_wordScore_twoLetters() {
           $test_ScrabbleScore = new ScrabbleScore;
           $input = "to";

           $result = $test_ScrabbleScore->wordScore($input);

           $this->assertEquals("2", $result);
       }
       //5. Enter "ad" and get back "3".
       function test_wordScore_twoLettersHigherScore() {
           $test_ScrabbleScore = new ScrabbleScore;
           $input = "ad";

           $result = $test_ScrabbleScore->wordScore($input);

           $this->assertEquals("3", $result);
       }
       //6. Enter "adbfkjq" and get back "33".
       function test_wordScore_sevenLettersHigherScore() {
           $test_ScrabbleScore = new ScrabbleScore;
           $input = "adbfkjq";

           $result = $test_ScrabbleScore->wordScore($input);

           $this->assertEquals("3", $result);
       }
}
?>
