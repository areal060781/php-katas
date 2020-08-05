<?php

use PHPUnit\Framework\TestCase;

class MoveZeroesTest extends TestCase
{
    /**
     * @test
     */
    public function it_moves_zeroes()
    {
        $this->assertEquals([1, 3, 12, 0, 0], moveZeroes([0, 1, 0, 3, 12]));
        $this->assertEquals([1, 3, 12, 0, 0, 0], moveZeroes([0, 1, 0, 3, 12, 0],));
    }

}
