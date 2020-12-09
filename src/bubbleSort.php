<?php

function bubbleSort($array)
{
    $toOrder = true;
    while ($toOrder) {
        $toOrder = false;
        for ($i = 1; $i < count($array); $i++) {
            if ($array[$i - 1] > $array[$i]) {
                $temp = $array[$i];
                $array[$i] = $array[$i - 1];
                $array[$i - 1] = $temp;
                $toOrder = true;
            }
        }
    }
    return $array;
}