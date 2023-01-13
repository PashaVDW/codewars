<?php
function isIsogram($string) {
    if (empty($string) || $string === NULL) {
        return true;
    }

    if (is_numeric($string)) {
        return false;
    } else {
        $counts = count_chars(strtolower($string), 1);
        foreach ($counts as $i => $val) {
            if ($val > 1) {
                return false;
            }
        }
        return true;
    }
}
