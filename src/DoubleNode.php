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

    /** @var Node|null  */
    public ?Node $next;

    /** @var Node|null  */
    public ?Node $previous;

    public function __construct($value)
    {
        $this->value = $value;
        $this->next = null;
        $this->previous = null;
    }
}
