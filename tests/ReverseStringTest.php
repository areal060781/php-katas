<?php

use PHPUnit\Framework\TestCase;

class ReverseStringTest extends TestCase
{
    /** @test */
    public function it_should_reverse_a_string()
    {
        $this->assertEquals('ogal led asac aL', reverseStringRecursive("La casa del lago"));
    }
}