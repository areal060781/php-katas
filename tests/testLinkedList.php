<?php
require '../vendor/autoload.php';

$myLinkedList = new App\LinkedList(10);
$myLinkedList->append(5)->append(16)->append(18)->prepend(1);
print_r($myLinkedList->printList());
$myLinkedList->insert(1, 20)->insert(0, 15)->insert(99, 3);
print_r($myLinkedList->printList());
//$myLinkedList->remove(0);
$myLinkedList->remove(5);
print_r($myLinkedList->printList());

/*
# Start with the empty list
$llist = new \App\LinkedListV2();

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