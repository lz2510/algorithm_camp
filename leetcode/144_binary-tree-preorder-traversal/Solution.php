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

	/**
	 * @param TreeNode $root
	 * @return Integer[]
	 */
	function preorderTraversal($root) {
		$node = $root;
		$nodes = [];
		$res = [];

		while($node || $nodes){
			if($node){
				$res[] = $node->val;
				$nodes[] = $node->right;
				$node = $node->left;
			}else{
				$node = array_pop($nodes);
			}
		}

		return $res;
	}
}