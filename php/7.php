<?php

function minValue($arr) {
    $result = array_unique($arr);
    sort($result);

    $minValue = '';
    foreach ($result as $digit) {
        $minValue .= $digit;
    }

    return (int)$minValue;
}


minvalue([1, 2, 1,]);

