<?php

/**
 * Udemy solution
 * Does not work properly
 *
 * @param array $array1
 * @param array $array2
 * @return array
 */
function mergedSortedArrayUdemy(array $array1, array $array2): array
{
    if (empty($array1)) {
        return $array2;
    }

    if (empty($array2)) {
        return $array1;
    }

    $mergedArray = [];

    $value1 = $array1[0];
    $value2 = $array2[0];

    while ($value1 or $value2) {
        if (!$value2 or $value1 < $value2) {
            $mergedArray[] = $value1;
            $value1 = $array1[$i1];
            $i1++;
        } else {
            $mergedArray[] = $value2;
            $value2 = $array2[$i2];
            $i2++;
        }
    }

    return $mergedArray;
}

/**
 * @param array $array1
 * @param array $array2
 * @return array
 */
function mergedSortedArray(array $array1, array $array2): array
{
    if (empty($array1)) {
        return $array2;
    }

    if (empty($array2)) {
        return $array1;
    }

    $mergedArray = [];
    $i1 = 0;
    $i2 = 0;
    $value1 = $array1[$i1];
    $value2 = $array2[$i2];

    while (isset($value1) or isset($value2)) {
        if ((!isset($value2) and isset($value1)) || (isset($value1, $value2) and $value1 < $value2)) {
            $mergedArray[] = $value1;
            $value1 = (isset($array1[$i1 + 1])) ? $array1[++$i1] : null;
        } else {
            $mergedArray[] = $value2;
            $value2 = (isset($array2[$i2 + 1])) ? $array2[++$i2] : null;
        }
    }

    return $mergedArray;
}

/**
 * @param $array1
 * @param $array2
 * @return array
 */
function mergedSortedArrayPointers($array1, $array2): array
{
    if (empty($array1)) {
        return $array2;
    }

    if (empty($array2)) {
        return $array1;
    }

    $mergedArray = [];
    $value1 = current($array1);
    $value2 = current($array2);

    do {
        if ((!isset($value2) and isset($value1)) || (isset($value1, $value2) and $value1 < $value2)) {
            $mergedArray[] = $value1;
            $value1 = next($array1);

            if ($value1 == '') {
                $value1 = null;
            }
        } else {
            $mergedArray[] = $value2;
            $value2 = next($array2);

            if ($value2 == '') {
                $value2 = null;
            }
        }
    } while (isset($value1) or isset($value2));
    return $mergedArray;
}