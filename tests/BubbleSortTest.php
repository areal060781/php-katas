<?php


use PHPUnit\Framework\TestCase;

class BubbleSortTest extends TestCase
{
    /** @test */
    public function it_should_sort_an_array()
    {
        $this->assertEquals([0, 1, 2, 4, 5, 6, 44, 63, 87, 99, 283], bubbleSort([99, 44, 6, 2, 1, 5, 63, 87, 283, 4, 0]));
    }
}
