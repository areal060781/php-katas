<?php


use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    /** @test */
    public function it_should_push_values()
    {
        $myStack = new App\Stack();
        $myStack->push('Google')->push('Udemy')->push('Discord');
        $this->assertEquals(['Discord', 'Udemy', 'Google'], $myStack->print());
    }

    /** @test */
    public function it_should_pop_values()
    {
        $myStack = new App\Stack();
        $myStack->push('Google')->push('Udemy')->push('Discord')->pop();
        $this->assertEquals(['Udemy', 'Google'], $myStack->print());

        $myStack->pop()->pop();
        $this->assertEquals([], $myStack->print());
    }

}
