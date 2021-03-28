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
	function inorderTraversal($root) {
		if(!$root->val){
			return [];
		}
		$res = $this->inorderTraversal($root->left);
		$res[] = $root->val;
		$res = array_merge($res,$this->inorderTraversal($root->right));
		return $res;
	}
}