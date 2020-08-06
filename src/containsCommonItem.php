<?php
/**
 *  Naive solution O(n^2)
 * @param array $arr1
 * @param array $arr2
 * @return bool
 */
function containsCommonItem1(array $arr1, array $arr2): bool
{
    for ($i = 0; $i < count($arr1); $i++) {
        for ($j = 0; $j < count($arr2); $j++) {
            if ($arr1[$i] == $arr2[$j]) {
                return true;
            }
        }
    }
    return false;
}

/**
 * O(n)
 *
 * @param array $arr1
 * @param array $arr2
 * @return bool
 */
function containsCommonItem2(array $arr1, array $arr2): bool
{
    $flipped = array_flip($arr1);
    $len2 = count($arr2);
    for ($i = 0; $i < $len2; $i++) {
        if (isset($flipped[$arr2[$i]])) {
            return true;
        }
    }
    return false;

}