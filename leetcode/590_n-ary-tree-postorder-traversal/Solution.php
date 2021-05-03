<?php


/**
 * Definition for a Node.
 * class Node {
 *     public $val = null;
 *     public $children = null;
 *     function __construct($val = 0) {
 *         $this->val = $val;
 *         $this->children = array();
 *     }
 * }
 */

class Solution {
	/**
	 * @param Node $root
	 * @return integer[]
	 */
	function postorder($root,$result = []) {
		if($root === null) return $result;
		foreach($root->children as $child){
			$result = $this->postorder($child,$result);
		}
		$result[] = $root->val;

		return $result;
	}
}