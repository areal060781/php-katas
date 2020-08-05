<?php

use PHPUnit\Framework\TestCase;

class MaximumSubarrayTest extends TestCase
{
    /**
     * @test
     */
    public function it_return_maximum_sum()
    {
        $this->assertEquals(6, maximumSumSubarray([-2, 1, -3, 4, -1, 2, 1, -5, 4]));
        $this->assertEquals(7, maximumSumSubarray([-2, -5, 6, -2, -3, 1, 5, -6]));
        $this->assertEquals(21, maximumSumSubarray([2, 3, 4, 5, 7]));
        $this->assertEquals(-1, maximumSumSubarray([-1]));
    }
}
