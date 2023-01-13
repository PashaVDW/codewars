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
        $splitstring1 = str_split($a);
        $splitstring2 = str_split($b);
        sort($splitstring1);
        sort($splitstring2);
        $splitstring1 = implode($splitstring1);
        $splitstring2 = implode($splitstring2);
        echo $splitstring1, $splitstring2;
    }
}

longest("testestest", "abcedf");