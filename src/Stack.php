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
    protected $top = null;
    protected $bottom = null;
    protected $lenght = 0;

    public function __constructor()
    {
        $this->top = null;
        $this->bottom = null;
        $this->lenght = 0;
    }

    public function peek()
    {
        return $this->top;
    }

    public function push($value)
    {
        $newNode = new Node($value);

        if ($this->lenght == 0) {
            $this->bottom = $newNode;
            $this->top = $this->bottom;
        } else {
            $newNode->next = $this->top;
            $this->top = $newNode;
        }

        $this->lenght++;
        return $this;
    }

    public function pop()
    {
        if ($this->top == null){
            return null;
        }

        $this->top = $this->top->next;
        $this->lenght--;

        if ($this->lenght == 0) {
            $this->bottom = null;
            $this->top =null;
        }

        return $this;
    }

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