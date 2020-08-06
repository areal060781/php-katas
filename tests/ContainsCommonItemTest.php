<?php

use PHPUnit\Framework\TestCase;

class ContainsCommonItemTest extends TestCase
{
    /** @test */
    public function it_contains_common_item()
    {
        $this->assertEquals(true, containsCommonItem2(['a', 'b', 'c', 'x'], ['z', 'y', 'a']));
    }
}