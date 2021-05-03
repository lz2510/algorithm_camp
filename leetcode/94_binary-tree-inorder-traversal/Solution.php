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
	function inorderTraversal($root) {
		$res = array();
		$this->helper($root,$res);
		return $res;
	}

	function helper($root, &$res){
		if(!$root){
			return;
		}

		$this->helper($root->left,$res);
		$res[] = $root->val;
		$this->helper($root->right,$res);
	}

	/**
	 * Recrusion without helper function
	 * @param TreeNode $root
	 * @return Integer[]
	 */
	function inorderTraversalMethod2($root) {
		if(!$root->val){
			return [];
		}
		$res = $this->inorderTraversal($root->left);
		$res[] = $root->val;
		$res = array_merge($res,$this->inorderTraversal($root->right));
		return $res;
	}
}