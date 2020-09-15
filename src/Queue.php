<?php


namespace App;


class Queue
{
    /** @var Node|null */
    protected ?Node $first = null;
    /** @var Node|null */
    protected ?Node $last = null;
    protected int $length = 0;

    public function __construct()
    {
        $this->first = null;
        $this->last = null;
        $this->length = 0;
    }

    public function peek()
    {
        return $this->first;
    }

    public function enqueue($value)
    {
        $node = new Node($value);

        if ($this->length == 0) {
            $this->first = $node;
            $this->last = $this->first;
        } else {
            $this->last->next = $node;
            $this->last = $node;
        }

        $this->length++;
        return $this;

    }

    public function dequeue()
    {
        if ($this->first == null) {
            return null;
        }

        $this->first = $this->first->next;
        $this->length--;

        if ($this->length == 0) {
            $this->first = null;
            $this->last = null;
        }

        return $this;
    }

    public function print()
    {
        $list = [];
        $currentNode = $this->first;
        while ($currentNode != null) {
            $list[] = $currentNode->value;
            $currentNode = $currentNode->next;
        }

        return $list;
    }

}