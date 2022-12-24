<?php
/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {
    private array $result = [];

    /**
     * @param TreeNode $root
     * @return Integer[][]
     */
    function levelOrder($root) {
        $this->dfs($root, 0);
        return $this->result;
    }

    private function dfs($node, int $level): void
    {
        if (!$node) {
            return;
        }
        $this->result[$level][] = $node->val;
        $this->dfs($node->left, $level + 1);
        $this->dfs($node->right, $level + 1);  

        //below are wrong, as change $level value but not reverse. 
        //right way is drill down but not change $level, $level + 1
        //$this->dfs($node->left, $level++);
        //$this->dfs($node->right, $level++);      
    }
}
