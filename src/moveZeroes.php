<?php
/**
 * Move Zeroes (Easy)
 * Given an array nums, write a function to move all 0's to the end of it while maintaining the relative order of the non-zero elements.
 * Example:
 *
 * Input: [0,1,0,3,12]
 * Output: [1,3,12,0,0]
 *
 * Note:
 * You must do this in-place without making a copy of the array.
 * Minimize the total number of operations.
 */

/**
 * @param array $array
 * @return array
 */
function moveZeroes(array $array): array
{
    $len = count($array);
    $zeroes = 0;
    for ($i = 0; $i < $len; $i++) {
        if ($array[$i] == 0) {
            $zeroes++;
            continue;
        }
        if ($array[$i] != 0 and $zeroes > 0) {
            $array[$i - $zeroes] = $array[$i];
        }
    }

    for ($i = $len - $zeroes; $i < $len; $i++) {
        $array[$i] = 0;
    }
    return $array;
}