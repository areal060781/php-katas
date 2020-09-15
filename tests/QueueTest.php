<?php


use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    /** @test */
    public function it_should_enqueue_values()
    {
        $myQueue= new App\Queue();
        $myQueue->enqueue('Google')->enqueue('Udemy')->enqueue('Discord');
        $this->assertEquals(['Google', 'Udemy', 'Discord'], $myQueue->print());
    }

    /** @test */
    public function it_should_dequeue_values()
    {
        $myQueue = new App\Queue();
        $myQueue->enqueue('Google')->enqueue('Udemy')->enqueue('Discord')->dequeue();
        $this->assertEquals(['Udemy', 'Discord'], $myQueue->print());

        $myQueue->dequeue()->dequeue();
        $this->assertEquals([], $myQueue->print());
    }

}
