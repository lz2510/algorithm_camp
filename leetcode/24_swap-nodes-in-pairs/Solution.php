<?php


/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */

class Solution {

	/**
	 * @param ListNode $head
	 * @return ListNode
	 */
	function swapPairs($head) {
		$dump = new ListNode();
		$dump->next = $head;

		$prevNode = $dump;

		while($head != null && $head->next != null){
			$firstNode = $head;
			$secondNode = $head->next;

			$prevNode->next = $secondNode;
			$firstNode->next = $secondNode->next;
			$secondNode->next = $firstNode;

			$prevNode = $firstNode;
			$head = $firstNode->next;
		}

		return $dump->next;
	}
}