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
    protected $array = null;


    public function __constructor()
    {
        $this->array = [];
    }

    public function peek()
    {
        return $this->array[count($this->array)-1];
    }

    public function push($value)
    {
        $this->array[] = $value;
        // array_push($this->array, $value);
        return $this;
    }

    public function pop()
    {
        unset($this->array[count($this->array)-1]);
        // array_pop($this->array)
        return $this;
    }

    public function print()
    {
        return $this->array;
    }
}