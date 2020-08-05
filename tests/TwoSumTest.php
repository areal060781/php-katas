<?php

use PHPUnit\Framework\TestCase;

class TwoSumTest extends TestCase
{
    /**
     * @test
     */
    public function it_return_an_array()
    {
        $this->assertEquals([0,1], twoSum([2,7,11,15], 9));
    }
}
