<?php
// Take 2 strings s1 and s2 including only letters from a to z. Return a new sorted string, the longest possible, containing distinct letters - each taken only once - coming from s1 or s2.
//
//Examples:
//a = "xyaabbbccccdefww"
//b = "xxxxyyyyabklmopq"
//longest(a, b) -> "abcdefklmopqwxy"
//
//a = "abcdefghijklmnopqrstuvwxyz"
//longest(a, a) -> "abcdefghijklmnopqrstuvwxyz"

function longest($a, $b) {
    if(is_numeric($a || $b)){
        return False;
    }
    else
    {
        $string = "";
        $string.= $a . $b;
        $string = str_split($string);
        sort($string);
        $string = implode($string);
        print($string);
    }
}

longest("testestest", "abcedf");