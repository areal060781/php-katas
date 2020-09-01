<?php


namespace App;


class LinkedListV2
{
    public $head;

    public function __construct()
    {
        $this->head = null;
    }

    // This should be O(1)
    public function append($value)
    {
        $newNode = new Node($value);

        if (is_null($this->head)) {
            $this->head = $newNode;
            return;
        }

        $last = $this->head;
        while ($last->next) {
            $last = $last->next;
        }

        $last->next = $newNode;
    }

    public function prepend($value)
    {
        $newNode = new Node($value);

        $newNode->next = $this->head;
        $this->head = $newNode;
    }

    public function insertAfter($prev, $value)
    {
        if(is_null($prev)){
            printf("The given previous node must inLinkedlist");
            return;
        }

        $newNode = new Node($value);
        $newNode->next = $prev->next;
        $prev->next = $newNode;
    }

    public function printList()
    {
        $temp = $this->head;
        while ($temp) {
            printf($temp->value. '->');
            $temp = $temp->next;
        }
    }
}