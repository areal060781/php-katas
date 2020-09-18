<?php


namespace App;


class BinarySearchTree
{
    public function __construct()
    {
        $this->root = null;
    }

    public function insert($value)
    {
        $node = new class($value) {
            public function __construct($value)
            {
                $this->left = null;
                $this->right = null;
                $this->value = $value;
            }
        };

        if ($this->root == null) {
            $this->root = $node;
            return $this;
        }


        $current = $this->root;
        while (true) {
            if ($value < $current->value) {
                if ($current->left == null) {
                    $current->left = $node;
                    return $this;
                }
                $current = $current->left;
            } else {
                if ($current->right == null) {
                    $current->right = $node;
                    return $this;
                }
                $current = $current->right;
            }
        }

    }

    public function lookup($value)
    {
        if ($this->root == null) {
            return false;
        }

        $current = $this->root;
        while ($current != null) {
            if ($value == $current->value) {
                return $current;
            } elseif ($value < $current->value) {
                $current = $current->left;
            } else {
                $current = $current->right;
            }
        }
        return false;
    }

    public function remove($value)
    {
        if ($this->root == null) {
            return false;
        }

        $parent = null;
        $current = $this->root;
        while ($current != null) {
            if ($value == $current->value) {
                // 1) v is a leaf, delete leaf v
                if ($current->left == null and $current->right == null) {
                    if ($parent === null) {
                        $this->root = null;
                        return true;
                    }
                    $parent->$side = null;
                } // 2) v has 1 child, bypass v
                elseif ($current->left == null or $current->right == null) {
                    $successor = $current->right ?? $current->left;
                    if ($parent === null) {
                        $this->root = $successor;
                        return true;
                    }
                    $parent->$side = $successor;
                } // 3) v has 2 children, replace v with successor
                else {
                    // a) Right child which does not have a left child
                    if ($current->right->left == null) {
                        $current->right->left = $current->left;
                        $parent->$side = $current->right;
                    } else { // b) Right child has a left child

                        // find the Right child's left most child
                        $leftmost = $current->right->left;
                        $leftmostParent = $current->right;
                        while ($leftmost->left !== null) {
                            $leftmostParent = $leftmost;
                            $leftmost = $leftmost->left;
                        }

                        // Parent's left subtree is now leftmost's right subtree
                        $leftmostParent->left = $leftmost->right;
                        $leftmost->left = $current->left;
                        $leftmost->right = $current->right;

                        if ($parent === null) {
                            $this->root = $leftmost;
                            return true;
                        }

                        $parent->$side = $leftmost;
                    }
                }
                return true;
            } elseif ($value < $current->value) {
                $parent = $current;
                $side = 'left';
                $current = $current->left;
            } else {
                $parent = $current;
                $side = 'right';
                $current = $current->right;
            }
        }
        return false;
    }

}

$myTree = new BinarySearchTree();

// v is a leaf
/*$myTree->insert(9);
$myTree->insert(4)->insert(20);
$myTree->insert(1)->insert(6);
$myTree->insert(15)->insert(70);
print_r($myTree);
$myTree->remove(1);
print_r($myTree);*/

// v has 1 child
$myTree->insert(4);
$myTree->insert(2)->insert(70);
$myTree->insert(1)->insert(3);
$myTree->insert(63)->insert(94);
$myTree->insert(60)->insert(96);
print_r($myTree);
$myTree->remove(63);
print_r($myTree);