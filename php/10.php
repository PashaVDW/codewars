<?php

//  Write a function that when given a number >= 0, returns an Array of ascending length subarrays.
//
//  pyramid(0) => [ ]
//  pyramid(1) => [ [1] ]
//  pyramid(2) => [ [1], [1, 1] ]
//  pyramid(3) => [ [1], [1, 1], [1, 1, 1] ]
//  Note: the subarrays should be filled with 1s


function pyramid($n) {
    $result = [];

    if($n > 0) {
        for ($i = 0; $i <= $n; $i++) {
            $subArray = array_fill(0, $i + 1, 1);
            $result[] = $subArray;
        }
        var_dump($result);
    }
    return $result;
}


pyramid(2);