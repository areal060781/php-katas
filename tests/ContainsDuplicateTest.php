<?php


use PHPUnit\Framework\TestCase;

class ContainsDuplicateTest extends TestCase
{
    /** @test */
    public function should_contains_duplicate()
    {
        $this->assertEquals(true, containsDuplicate([1,2,3,1]));
        $this->assertEquals(true, containsDuplicate([1,1,1,3,3,4,3,2,4,2]));
        $this->assertEquals(false, containsDuplicate([1,2,3,4]));
    }
}
