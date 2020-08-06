<?php

use PHPUnit\Framework\TestCase;

class ReverseString extends TestCase
{
    /** @test */
    public function it_should_reverse_a_string()
    {
        $this->assertEquals('ogal led asac aL', reverseString("La casa del lago"));
    }
}