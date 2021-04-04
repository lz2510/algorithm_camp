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
	function postorderTraversal($root) {
		$res = array();
		$this->helper($root,$res);
		return $res;
	}

	function helper($root, &$res){
		if(!$root){
			return;
		}

		$this->helper($root->left,$res);
		$this->helper($root->right,$res);
		array_push($res,$root->val);
	}

}