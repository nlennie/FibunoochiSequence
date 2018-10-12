<?php

class FibonnacciSequencer
{
    public function findNumberByIndexInSequence($number)
    {
        $fibNumbers = [0, 1];
        if ($number < 2) {
            return $fibNumbers[$number-1];
        }
        while (count($fibNumbers) <= $number) {
            $fibNumbers[] = $fibNumbers[count($fibNumbers) - 2] + $fibNumbers[count($fibNumbers) - 1];
        }
        return $fibNumbers[$number-1];
    }

}