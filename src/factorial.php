<?php
function factorialRecursive($num)
{
    if ($num == 0)
        return 1;

    return $num * factorialRecursive($num - 1);
}

function factorialIterative($num)
{
    for ($x = 2, $factorial = 1; $x <= $num; $x++) {
        $factorial *= $x;
    }
    return $factorial;
}