<?php
    class Anagram
    {
        function anagramChecker($base_word, $input1, $input2, $input3)
        {
            $result_array = [$input1 => $input1, $input2 => $input2, $input3 => $input3];
            $input_array = [$input1 => $input1, $input2 => $input2, $input3 => $input3];

            $base_word_array = str_split($base_word);
            sort($base_word_array);
            $final_base_word = implode("", $base_word_array);

            foreach ($input_array as $key => $value)
            {
                $new_value = str_split($value);
                sort($new_value);
                $final_new_value = implode("", $new_value);

                if ($final_new_value == $final_base_word) {
                    $result_array[$key] = true;
                } else {
                    $result_array[$key] = false;
                }

            }
            return $result_array;

        }
    }
?>
