<?php

namespace App;

/**
 * Class Node
 * @package App
 */
class Node
{
    /**
     * @var int $value
     */
    public int $value;

    /** @var Node|null  */
    public ?Node $next;

    public function __construct($value)
    {
        $this->value = $value;
        $this->next = null;
    }
}
