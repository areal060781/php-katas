<?php


namespace App;

/**
 * Class Stack
 * A LIFO implementation with linked lists
 *
 * @package App
 */
class Stack
{
    /** @var Node|null */
    protected ?Node $top = null;
    /** @var Node|null */
    protected ?Node $bottom = null;
    protected int $length = 0;

    public function __constructor()
    {
        $this->top = null;
        $this->bottom = null;
        $this->length = 0;
    }

    /**
     * @return Node|null
     */
    public function peek()
    {
        return $this->top;
    }

    /**
     * @param $value
     * @return $this
     */
    public function push($value)
    {
        $newNode = new Node($value);

        if ($this->length == 0) {
            $this->bottom = $newNode;
            $this->top = $this->bottom;
        } else {
            $newNode->next = $this->top;
            $this->top = $newNode;
        }

        $this->length++;
        return $this;
    }

    /**
     * @return $this|null
     */
    public function pop()
    {
        if ($this->top == null) {
            return null;
        }

        $this->top = $this->top->next;
        $this->length--;

        if ($this->length == 0) {
            $this->bottom = null;
            $this->top = null;
        }

        return $this;
    }

    /**
     * @return array
     */
    public function print()
    {
        $list = [];
        $currentNode = $this->top;
        while ($currentNode != null) {
            $list[] = $currentNode->value;
            $currentNode = $currentNode->next;
        }

        return $list;
    }
}