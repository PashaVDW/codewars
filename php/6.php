<?php
// remove 5 from array and return the count

function dont_give_me_five($start, $end)
{
    $list = array();
    for ($i = $start; $i <= $end; $i++)
    {
        $list[] = $i;
    }

    $list = array_filter($list, function ($value) {
        return !str_contains((string)$value, '5');
    });

    return count($list);
}

