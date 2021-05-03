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
	 * recrusion with helper function
	 * @param TreeNode $root
	 * @return Integer[]
	 */
	function preorderTraversal($root) {
		$res = array();
		$this->helper($root,$res);
		return $res;
	}

	function helper($root, &$res){
		if(!$root){
			return;
		}

		$res[] = $root->val;
		$this->helper($root->left,$res);
		$this->helper($root->right,$res);
	}

	/**
	 * Iterations
	 * @param TreeNode $root
	 * @return Integer[]
	 */
	function preorderTraversalMethod2($root) {
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