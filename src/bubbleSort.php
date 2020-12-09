<?php

function bubbleSort($array)
{
    $len = count($array);
    $toOrder = true;
    while ($toOrder) {
        $toOrder = false;
        for ($i = 1; $i < $len; $i++) {
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

function bubbleSort2($array)
{
    $len = count($array);
    for ($i = 0; $i < $len; $i++) {
        for ($j = 0; $j < $len -1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    return $array;
}