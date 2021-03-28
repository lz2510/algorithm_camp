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
	 * @return Boolean
	 */
	function isValidBST($root) {
		return $this->isBST($root,null,null);
	}

	function isBST($root,$low,$high){
		if($root==null){
			return true;
		}

		//must be ===, not ==, as tree val can be 0
		if(($low !== null && $root->val <= $low) || ($high !== null && $root->val >= $high)){
			return false;
		}

		return $this->isBST($root->left,$low,$root->val) && $this->isBST($root->right,$root->val,$high);

	}
}