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
        $newNode->previous = $this->tail;
        $this->tail->next = $newNode;

        $this->tail = $newNode;
        $this->length++;

        return $this;
    }

    public function prepend($value)
    {
        $newNode = new DoubleNode($value);
        $this->head->previous = $newNode;
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

        $leader = $this->getNode($index - 1);
        $follower = $leader->next;

        $newNode->previous = $leader;
        $newNode->next = $follower;

        $leader->next = $newNode;
        $follower->previous = $newNode;

        $this->length++;

        return $this;
    }

    public function remove($index)
    {
        if ($this->length == 1) {
            return $this;
        }

        if ($index == 0) {
            $follower = $this->head->next;
            $follower->previous = null;
            $this->head = $follower;

            if ($this->length == 2) {
                $this->tail = $this->head;
            }
        } elseif ($index == $this->length - 1) {
            $leader = $this->getNode($index - 1);
            $leader->next = null;

            $this->tail = $leader;
        } else {
            $leader = $this->getNode($index - 1);
            $nodeToRemove = $leader->next;
            $follower = $nodeToRemove->next;

            $follower->previous = $leader;
            $leader->next = $follower;
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
