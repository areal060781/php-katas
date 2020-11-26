<?php

function fibonacciIterative($index)
{
    if ($index < 2)
        return $index;

    $oldSum = 1;
    $currentSum = 1;
    $count = 2;

    while ($count < $index) {
        $currentSum += $oldSum;
        $oldSum = $currentSum - $oldSum;
        $count++;
    }

    return $currentSum;
}

print(fibonacciIterative(6));

// O(n)
function fibonacciIterative2($index)
{
    $arr = [0, 1];
    for ($i = 2; $i < $index + 1; $i++) {
        $arr[] = $arr[$i - 2] + $arr[$i - 1];
    }
    return $arr[$index];
}


print(fibonacciIterative2(6));

// O(2^n)
function fibonacciRecursive($index)
{
    if ($index < 2)
        return $index;
    return fibonacciRecursive($index - 1) + fibonacciRecursive($index - 2);
}

print(fibonacciRecursive(6));