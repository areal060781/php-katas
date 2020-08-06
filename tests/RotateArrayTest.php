<?php


use PHPUnit\Framework\TestCase;

class RotateArrayTest extends TestCase
{
    /**
     * @test
     * @dataProvider useCases
     */
    public function it_should_rotate($nums, $posititions, $expected)
    {
        $this->assertEquals($expected, rotateArray($nums, $posititions));
    }

    public function useCases()
    {
        return [
            [[1, 2, 3, 4, 5], 3, [3, 4, 5, 1, 2]],
            [[1, 2, 3, 4, 5, 6, 7], 3, [5, 6, 7, 1, 2, 3, 4]],
            [[1, 2, 3, 4, 5, 6, 7, 8, 9, 10], 3, [8, 9, 10, 1, 2, 3, 4, 5, 6, 7]],
        ];
    }
}
