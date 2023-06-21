<?php
// The marketing team is spending way too much time typing in hashtags.
//Let's help them with our own Hashtag Generator!
//
//Here's the deal:
//
//It must start with a hashtag (#).
//All words must have their first letter capitalized.
//If the final result is longer than 140 chars it must return false.
//If the input or the result is an empty string it must return false.

function generateHashtag($str) {
    if(strlen($str) >= 140) {
        return false;
    } elseif (empty($str)) {
        return false;
    }

    $string = '';
    $splitStr = preg_split("/[\s,]+/", $str);

    foreach ($splitStr as $value) {
        $upperCasedWord = ucfirst($value);
        $string .= $upperCasedWord;
    }

    if($string[0] === '#') {
        return $string;
    } else {
        return '#' . $string;
    }
}

generateHashtag('Codewars');