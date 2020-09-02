<?php


use PHPUnit\Framework\TestCase;

class DoubleLinkedListTest extends TestCase
{
    /** @test */
    public function it_should_return_an_array()
    {
        $myLinkedList = new App\DoubleLinkedList(10);


        $myLinkedList->append(5)
            ->append(16);

        $this->assertEquals([10, 5, 16], $myLinkedList->printForward());
        $this->assertEquals([16, 5, 10], $myLinkedList->printBackward());


        $myLinkedList->prepend(1);

        $this->assertEquals([1, 10, 5, 16], $myLinkedList->printForward());
        $this->assertEquals([16, 5, 10, 1], $myLinkedList->printBackward());


        $myLinkedList->insert(3, 3)
            ->insert(3, 4);

        $this->assertEquals([1, 10, 5, 4, 3, 16], $myLinkedList->printForward());
        $this->assertEquals([16, 3, 4, 5, 10, 1], $myLinkedList->printBackward());


        $myLinkedList->remove(4);

        $this->assertEquals([1, 10, 5, 4, 16], $myLinkedList->printForward());
        $this->assertEquals([16, 4, 5, 10, 1], $myLinkedList->printBackward());


        $myLinkedList->remove(0);
        $this->assertEquals([10, 5, 4, 16], $myLinkedList->printForward());
        $this->assertEquals([16, 4, 5, 10], $myLinkedList->printBackward());

    }
}