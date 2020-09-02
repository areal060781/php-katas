<?php


use PHPUnit\Framework\TestCase;

class SingleLinkedListTest extends TestCase
{
    /** @test */
    public function it_should_return_an_array()
    {
        $myLinkedList = new App\SingleLinkedList(10);
        $this->assertEquals([10], $myLinkedList->printList());


        $myLinkedList->append(5)
            ->append(16)
            ->append(18);
        $this->assertEquals([10, 5, 16, 18], $myLinkedList->printList());


        $myLinkedList->prepend(1)
            ->prepend(2);
        $this->assertEquals([2, 1, 10, 5, 16, 18], $myLinkedList->printList());


        $myLinkedList->insert(1, 20)
            ->insert(0, 15);
        $this->assertEquals([15, 2, 20, 1, 10, 5, 16, 18], $myLinkedList->printList());


        $myLinkedList->remove(5);
        $this->assertEquals([15, 2, 20, 1, 10, 16, 18], $myLinkedList->printList());

        $myLinkedList->remove(0);
        $this->assertEquals([2, 20, 1, 10, 16, 18], $myLinkedList->printList());
    }
}