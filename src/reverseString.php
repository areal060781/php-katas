<?php
/**
 * Alternative to strrev($string)
 * @param $string
 * @return string
 */
function reverseString(string $string): string
{
    $long = strlen($string);
    $newString = '';
    for ($i = $long - 1; $i >= 0; $i--) {
        $newString .= $string[$i];
    }
    return $newString;
}
