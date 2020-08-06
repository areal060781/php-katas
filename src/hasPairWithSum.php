<?php
/**
 * Naive solution, O(n ^2)
 * @param array $arr
 * @param int $sum
 * @return bool
 */
function hasPairWithSum1(array $arr, int $sum): bool
{
    $len = count($arr);
    for ($i = 0; $i < $len; $i++) {
        for ($j = 0; $j < $len; $j++) {
            if ($arr[$i] + $arr[$j] == $sum) {
                return true;
            }
        }
    }
    return false;
}

/**
 * Better O(n)
 * @param array $arr
 * @param int $sum
 * @return bool
 */
function hasPairWithSum2(array $arr, int $sum): bool
{
    $hash = [];
    $len = count($arr);

    for ($i = 0; $i < $len; $i++) {
        if (in_array($arr[$i], $hash)) {
            return true;
        }
        $hash[] = $sum - $arr[$i];
    }
    return false;
}
