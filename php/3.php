<!--Welcome. In this kata, you are asked to square every digit of a number and concatenate them.

For example, if we run 9119 through the function, 811181 will come out, because 92 is 81 and 12 is 1.

Note: The function accepts an integer and returns an integer-->
<?php
function square_digits(int $num) {
    $result = '';
    $number = str_split($num);
    foreach($number as $numbers)
    {
        if(is_numeric($numbers)){
            $result .= pow($numbers, 2);
        }
    }
    return intval($result);
}
echo square_digits(1357);