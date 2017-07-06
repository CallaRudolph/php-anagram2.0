<?php
    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function testAnagramChecker()
        {
            $test_anagram = new Anagram;
            $base_word = "ab";
            $input1 = "ab";
            $input2 = "cd";
            $input3 = "th";

            $result = $test_anagram->anagramChecker($base_word, $input1, $input2, $input3);

            $this->assertEquals([$input1 => true, $input2 => false, $input3 => false], $result);
        }

        function testAnagramCheckerThreeLetter()
        {
            $test_anagram = new Anagram;
            $base_word = "cat";
            $input1 = "act";
            $input2 = "tca";
            $input3 = "red";

            $result = $test_anagram->anagramChecker($base_word, $input1, $input2, $input3);

            $this->assertEquals([$input1 => true, $input2 => true, $input3 => false], $result);
        }
    }
?>
