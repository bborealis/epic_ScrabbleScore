<?php

    require_once "src/ScrabbleScore.php";

    class ScrabbleScoreTest extends PHPUnit_Framework_TestCase {

       // Enter "A" and get back "1".
       function test_wordScore_oneLetter() {
           $test_ScrabbleScore = new ScrabbleScore;
           $input = "A";

           $result = $test_ScrabbleScore->wordScore($input);

           $this->assertEquals("1", $result);
       }

}
?>
