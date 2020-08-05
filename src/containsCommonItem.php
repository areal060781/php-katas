<?php
// Naive solution O(n^2)
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

// O(n)
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

$r = containsCommonItem2(['a', 'b', 'c', 'x'], ['z', 'y', 'a']);
print($r . "\n");