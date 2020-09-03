<?php

namespace App;

/**
 * Class SingleLinkedList
 * Creates a single linked list
 *
 * @package App
 *
 * myLinkedList = {
 *      value : 10,
 *      next : {
 *          value: 8,
 *          next: {
 *               value : 6,
 *               next: {
 *                   value : 4,
 *                   next : null
 *              }
 *          }
 *      }
 * }
 */
class SingleLinkedList
{
    /**
     * @var Node
     */
    public Node $head;
    /**
     * @var Node
     */
    public Node $tail;
    public int $length;

    public function __construct($value)
    {
        $this->head = new Node($value);
        $this->tail = $this->head;
        $this->length = 1;
    }

    public function append($value)
    {
        $newNode = new Node($value);
        $this->tail->next = $newNode;

        $this->tail = $newNode;
        $this->length++;

        return $this;
    }

    public function prepend($value)
    {
        $newNode = new Node($value);
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

        $newNode = new Node($value);

        $leader = $this->getNode($index - 1);

        $newNode->next = $leader->next;
        $leader->next = $newNode;

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

            $leader->next = $nodeToRemove->next;
        }

        $this->length--;

        return $this;
    }

    public function printList()
    {
        $list = [];
        $currentNode = $this->head;
        while ($currentNode != null) {
            $list[] = $currentNode->value;
            $currentNode = $currentNode->next;
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
