<?php
    class SequenceSum {
        public function showSequence($count) {
            // check if count is less than 0
            if ($count < 0) {
                return $count."<0";
            }

            // check if count is equal to 0
            if ($count == 0) {
                return "0=0";
            }

            // initialize sum to 0
            $sum = 0;

            // for loop to add numbers from 1 to $count
            for ($i = 1; $i <= $count; $i++) {
                $sum += $i;
            }

            // format the output string
            $output = implode('+', range(0, $count)) . " = " . $sum;

            return $output;
        }
    }

showSequence(10);