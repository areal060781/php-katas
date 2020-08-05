<?php
// Naive solution, O(n ^2)
function hasPairWithSum1(array $arr, int $sum):Bool
{
    $len = count($arr);
    for ($i = 0; $i < $len; $i++){
        for ($j = 0; $j < $len; $j++){
            if($arr[$i] + $arr[$j] == $sum){
                return true;
            }
        }
    }
    return false;
}

//Better O(n)
function hasPairWithSum2(array $arr, int $sum):Bool
{
    $hash = [];
    $len = count($arr);

    for ($i = 0; $i < $len; $i++){
        if(in_array($arr[$i], $hash)){
            return true;
        }
        $hash[] = $sum - $arr[$i];
    }
    return false;
}

$r = hasPairWithSum2([6, 4, 3, 2, 1, 7], 9); //(6,3)
print($r."\n");

$r = hasPairWithSum2([1,2,3,9], 8);
print($r."\n");

$r = hasPairWithSum2([1,2,4,4], 8); //(4,4)
print($r."\n");