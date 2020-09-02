<?php


namespace App;


class SingleLinkedListV2
{
    public $head;

    public function __construct()
    {
        $this->head = null;
    }

    // This should be O(1)
    public function append($value)
    {
        $newNode = new Node($value);

        if (is_null($this->head)) {
            $this->head = $newNode;
            return;
        }

        $last = $this->head;
        while ($last->next) {
            $last = $last->next;
        }

        $last->next = $newNode;
    }

    public function prepend($value)
    {
        $newNode = new Node($value);

        $newNode->next = $this->head;
        $this->head = $newNode;
    }

    public function insertAfter($prev, $value)
    {
        if(is_null($prev)){
            printf("The given previous node must inLinkedlist");
            return;
        }

        $newNode = new Node($value);
        $newNode->next = $prev->next;
        $prev->next = $newNode;
    }

    public function printList()
    {
        $temp = $this->head;
        while ($temp) {
            printf($temp->value. '->');
            $temp = $temp->next;
        }
    }
}


/*
# Start with the empty list
$llist = new \App\SingleLinkedListV2();

# Insert 6.  So linked list becomes 6->None
$llist->append(6);

# Insert 7 at the beginning. So linked list becomes 7->6->None
$llist->prepend(7);


# Insert 1 at the beginning. So linked list becomes 1->7->6->None
$llist->prepend(1);

# Insert 4 at the end. So linked list becomes 1->7->6->4->None
$llist->append(4);

# Insert 8, after 7. So linked list becomes 1 -> 7-> 8-> 6-> 4-> None
$llist->insertAfter($llist->head->next, 8);

$llist->printList();
*/