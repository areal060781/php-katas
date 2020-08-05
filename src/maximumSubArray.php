<?php
/*  Maximum Subarray (Easy)

Given an integer array nums, find the contiguous subarray (containing at least one number) which has the largest sum
and return its sum.

Example:

Input: [-2,1,-3,4,-1,2,1,-5,4],
Output: 6
Explanation: [4,-1,2,1] has the largest sum = 6.
Follow up:

If you have figured out the O(n) solution, try coding another solution using the divide and conquer approach, which is
more subtle.
*/

/**
 * Naive solution O(n)
 * @param array $nums
 * @return int
 */
function maximumSumSubarray(array $nums): int
{
    $best_sum = PHP_INT_MIN;
    $current_sum = 0;
    foreach ($nums as $num) {
        $current_sum += $num;

        if ($best_sum < $current_sum)
            $best_sum = $current_sum;

        if ($current_sum < 0)
            $current_sum = 0;

    }
    return $best_sum;
}

function maximumSubarray(array $nums): array
{
    $best_sum = 0;  # or: float('-inf')
    $best_start = 0;
    $best_end = 0;  # or: None
    $current_sum = 0;
    foreach ($nums as $i => $num) {
        if ($current_sum <= 0) {
            $current_start = $i;
            $current_sum = $num;
        } else {
            $current_sum += $num;
        }
        if ($current_sum > $best_sum) {
            $best_sum = $current_sum;
            $best_start = $current_start;
            $best_end = $i;
        }
    }
    return [$best_sum, $best_start, $best_end];
}

function maximumSubarray2(array $nums): array
{
    $max_so_far = PHP_INT_MIN;
    $max_ending_here = 0;
    $start = 0;
    $end = 0;
    $s = 0; //current_start
    foreach ($nums as $i => $num) {
        $max_ending_here += $num; //-2,-1,-4
        if ($max_so_far < $max_ending_here) {
            $max_so_far = $max_ending_here; //-2,-1
            $start = $s; //0,1
            $end = $i; //0,1
        }
        if ($max_ending_here < 0) {
            $max_ending_here = 0; //0,0,0
            $s = $i + 1; //1,2,3
        }
    }
    return [$max_so_far, $start, $end];
}