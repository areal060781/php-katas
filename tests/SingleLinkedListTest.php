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

    /** @test */
    public function it_remove_last_element()
    {
        $myLinkedList = new App\SingleLinkedList(10);

        $myLinkedList->append(5)
            ->append(16)
            ->remove(2);

        $this->assertEquals([10, 5], $myLinkedList->printList());
    }

    /** @test */
    public function it_reverses_list()
    {
        /*$myLinkedList = new App\SingleLinkedList(10);

        $myLinkedList->append(5)
            ->append(16)
            ->append(2)
            ->append(4)
            ->append(8)
            ->append(12);

        $this->assertEquals([10, 5, 16, 2, 4, 8, 12], $myLinkedList->printList());

        $myLinkedList->reverse();
        $this->assertEquals([12, 8, 4, 2, 16, 5, 10], $myLinkedList->printList());*/

        $myLinkedList = new App\SingleLinkedList(10);

        $myLinkedList->append(5)
            ->append(21)
            ->append(16)
            ->append(30)
            ->append(15)
            ->reverse();

        $this->assertEquals([15, 30, 16, 21, 5, 10], $myLinkedList->printList());
    }
}