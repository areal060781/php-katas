<?php


use PHPUnit\Framework\TestCase;

class SingleLinkedListTest extends TestCase
{
    /** @test */
    public function it_should_return_an_array()
    {

        $myLinkedList = new App\SingleLinkedList(10);

        $myLinkedList->append(5)
            ->append(16)
            ->append(18)
            ->prepend(1);

        $this->assertEquals([1, 10, 5, 16, 18], $myLinkedList->printList());


        $myLinkedList->insert(1, 20)
            ->insert(0, 15)
            ->insert(99, 3);

        $this->assertEquals([15, 1, 20, 10, 5, 16, 18, 3], $myLinkedList->printList());


        //$myLinkedList->remove(0);
        $myLinkedList->remove(5);

        $this->assertEquals([15, 1, 20, 10, 5, 18, 3], $myLinkedList->printList());
    }
}