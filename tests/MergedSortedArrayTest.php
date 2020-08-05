<?php

use PHPUnit\Framework\TestCase;

class MergedSortedArrayTest extends TestCase
{

    /**
     * @test
     * @dataProvider arrays
     */
    public function it_merged_sorted_array($array1, $array2, $expected)
    {
        $this->assertEquals($expected, mergedSortedArrayPointers($array1, $array2));
    }

    public function arrays()
    {
        return [
            [[0], [1], [0, 1]],
            [[1], [0], [0, 1]],
            [[7, 8], [1, 2], [1, 2, 7, 8]],
            [[0, 1], [0, 2], [0, 0, 1, 2]],
            [[2, 4], [1, 3], [1, 2, 3, 4]],
            [[0, 1, 3], [0, 2], [0, 0, 1, 2, 3]],
            [[1, 2, 3], [7, 8, 9], [1, 2, 3, 7, 8, 9]],
            [[7, 8, 9], [1, 2, 3], [1, 2, 3, 7, 8, 9]],
            [[0, 3, 4, 31], [4, 6, 30], [0, 3, 4, 4, 6, 30, 31]],
            [[4, 6, 30], [0, 3, 4, 31], [0, 3, 4, 4, 6, 30, 31]],
            [[7, 8], [1, 2, 3, 4, 5, 6], [1, 2, 3, 4, 5, 6, 7, 8]],
            [[0, 3, 4, 31], [4, 6, 30, 32], [0, 3, 4, 4, 6, 30, 31, 32]],
            [[5, 10, 15], [3, 6, 9, 12, 15, 18], [3, 5, 6, 9, 10, 12, 15, 15, 18]],
            [[5, 10, 15], [3, 6, 9, 12, 15, 18], [3, 5, 6, 9, 10, 12, 15, 15, 18]]
        ];
    }

}
