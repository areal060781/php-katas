<?php

namespace App;

/**
 * Class DoubleNode
 * @package App
 */
class DoubleNode
{
    /**
     * @var int $value
     */
    public int $value;

    /** @var DoubleNode|null  */
    public ?DoubleNode $next;

    /** @var DoubleNode|null  */
    public ?DoubleNode $previous;

    public function __construct($value)
    {
        $this->value = $value;
        $this->next = null;
        $this->previous = null;
    }
}
