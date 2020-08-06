<?php

use PHPUnit\Framework\TestCase;

class HasPairWithSum extends TestCase
{
    /** @test */
    public function should_has_pair_sum()
    {
        $this->assertEquals(true, hasPairWithSum2([6, 4, 3, 2, 1, 7], 9));
        $this->assertEquals(false, hasPairWithSum2([1, 2, 3, 9], 8));
        $this->assertEquals(true, hasPairWithSum2([1, 2, 4, 4], 8));
    }
}