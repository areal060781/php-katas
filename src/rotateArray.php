<?php
/*
 * Rotate Array (Easy)
Given an array, rotate the array to the right by k steps, where k is non-negative.

Follow up:
Try to come up as many solutions as you can, there are at least 3 different ways to solve this problem.
Could you do it in-place with O(1) extra space?

Example 1:
Input: nums = [1,2,3,4,5,6,7], k = 3
Output: [5,6,7,1,2,3,4]
Explanation:
rotate 1 steps to the right: [7,1,2,3,4,5,6]
rotate 2 steps to the right: [6,7,1,2,3,4,5]
rotate 3 steps to the right: [5,6,7,1,2,3,4]

Example 2:
Input: nums = [-1,-100,3,99], k = 2
Output: [3,99,-1,-100]
Explanation:
rotate 1 steps to the right: [99,-1,-100,3]
rotate 2 steps to the right: [3,99,-1,-100]

Constraints:
1 <= nums.length <= 2 * 10^4
It's guaranteed that nums[i] fits in a 32 bit-signed integer.
k >= 0
 */

/**
 * Naive solution with auxiliaries array temps
 * @param array $nums
 * @param int $places
 * @return array
 */
function rotateArrayN(array $nums, int $places): array
{
    $total = count($nums);

    if ($places >= $total)
        return $nums;

    $newArray = [];
    foreach ($nums as $i => $value) {
        if ($i < $total - $places) {
            $newArray[$i + $places] = $value;
        } else {
            $newArray[$i - $total + $places] = $value;
        }
    }
    return $newArray;
}

function rotateArrayF(array $nums, int $places): array
{
    $total = count($nums);

    if ($places >= $total)
        return $nums;

    // Option 1
    //$array1 = array_slice($nums, -($places));
    //$array2 = array_slice($nums, 0, $total - $places);
    //return array_merge($array1, $array2);

    //Option 2
    $array1 = array_chunk($nums, $total - $places);
    return array_merge($array1[1], $array1[0]);
}

function reverse(array &$arr, int $start, int $end)
{
    while ($start < $end) {
        $temp = $arr[$start];

        $arr[$start] = $arr[$end];
        $arr[$end] = $temp;

        $start++;
        $end--;
    }

    return $arr;
}

function rotateArray(array $arr, int $k)
{
    $n = count($arr);
    $k %= $n;

    # reverse the whole array
    reverse($arr, 0, $n - 1);

    # reverse first subarray
    reverse($arr, 0, $k - 1);

    # reverse second subarray
    reverse($arr, $k, $n - 1);

    # return rotated array
    return $arr;
}