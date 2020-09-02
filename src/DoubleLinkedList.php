<?php

namespace App;

class DoubleLinkedList
{
    /**
     * @var DoubleNode
     */
    public DoubleNode $head;
    /**
     * @var DoubleNode
     */
    public DoubleNode $tail;
    public int $length;

    public function __construct($value)
    {
        $this->head = new DoubleNode($value);
        $this->tail = $this->head;
        $this->length = 1;
    }

    public function append($value)
    {
        $newNode = new DoubleNode($value);
        $newNode->previous = $this->tail; //
        $this->tail->next = $newNode;
        $this->tail = $newNode;
        $this->length++;

        return $this;
    }

    public function prepend($value)
    {
        $newNode = new DoubleNode($value);
        $this->head->previous = $newNode; //
        $newNode->next = $this->head;
        $this->head = $newNode;
        $this->length++;

        return $this;
    }

    public function insert($index, $value)
    {
        if ($index >= $this->length) {
            return $this->append($value);
        }

        if ($index == 0) {
            return $this->prepend($value);
        }

        $newNode = new DoubleNode($value);

        $prevNode = $this->getNode($index - 1);

        $nodeToDisplace = $prevNode->next; // or tail ?
        $newNode->previous = $nodeToDisplace->previous; //
        $nodeToDisplace->previous = $newNode; //

        $newNode->next = $prevNode->next;
        $prevNode->next = $newNode;

        $this->length++;

        return $this;
    }

    public function remove($index)
    {
        if ($index == 0) {
            $this->head->next->previous = null; //
            $this->head = $this->head->next;
        } else {
            $prevNode = $this->getNode($index - 1);
            $nodeToRemove = $prevNode->next;
            $nodeToDisplace = $nodeToRemove->next; //
            $nodeToDisplace->previous = $prevNode; //

            $prevNode->next = $nodeToRemove->next;
        }

        $this->length--;

        return $this;
    }

    public function printForward()
    {
        $list = [];
        $currentNode = $this->head;
        while ($currentNode != null) {
            $list[] = $currentNode->value;
            $currentNode = $currentNode->next;
        }

        return $list;
    }

    public function printBackward()
    {
        $list = [];
        $currentNode = $this->tail;
        while ($currentNode != null) {
            $list[] = $currentNode->value;
            $currentNode = $currentNode->previous;
        }

        return $list;
    }

    protected function getNode($index)
    {
        $i = 0;
        $current = $this->head;
        while ($i !== $index) {
            $current = $current->next;
            $i++;
        }
        return $current;
    }
}
