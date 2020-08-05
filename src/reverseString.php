<?php

function reverseString($string)
{
    $long = strlen($string);
    $newString = '';
    for ($i = $long - 1; $i >= 0; $i--) {
        $newString .= $string[$i];
    }
    return $newString;
}

$string = "La casa del lago";
print(reverseString($string));
print(strrev($string));
