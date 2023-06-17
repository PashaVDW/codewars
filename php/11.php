<?php
// Write an algorithm that takes an array and moves all the zeros to the end, preserving the order of the other elements.
// moveZeros([false,1,0,1,2,0,1,3,"a"]) // returns[false,1,1,2,1,3,"a",0,0]

function moveZeros(array $items): array
{
    $zeros = [];
    $nonZeros = [];

    foreach ($items as $value) {
        if ($value === 0 || $value === 0.0) {
            $zeros[] = 0;
        } else {
            $nonZeros[] = $value;
        }
    }

    return array_merge($nonZeros, $zeros);
}




moveZeros([false,1,0,1,2,0,1,3,"a"]);