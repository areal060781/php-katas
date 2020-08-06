<?php
/**
 * Move Zeroes (Easy)
Given an array nums, write a function to move all 0's to the end of it while maintaining the relative order of the non-zero elements.

Example:

Input: [0,1,0,3,12]
Output: [1,3,12,0,0]
Note:

You must do this in-place without making a copy of the array.
Minimize the total number of operations.
 */

/**
 * @param array $nums
 * @param int $target
 * @return array
 */
function twoSum(array $nums, int $target): array
{
    $differences = [];
    foreach ($nums as $i => $num) {
        if (isset($differences[$num])) {
            return [$differences[$num], $i];
        }
        $differences[$target - $num] = $i;
    }
    return $differences;
}
