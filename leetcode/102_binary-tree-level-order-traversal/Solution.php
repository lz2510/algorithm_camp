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
	public $result = [];

	/**
	 * @param TreeNode $root
	 * @return Integer[][]
	 */
	function levelOrder($root) {
		$this->result = [];
		$this->helper($root,0);
		return $this->result;
	}

	function helper($node,$level){
		if($node){
			$this->result[$level][] = $node->val;
			$level++;
			$this->helper($node->left,$level);
			$this->helper($node->right,$level);
			$level--;
		}

	}
}