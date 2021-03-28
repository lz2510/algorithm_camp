<?php

class Node{
	public $val;
	public $next;

	function __construct($val=null){
		$this->val = $val;
		$this->next = null;
	}
}
class MyLinkedList
{
	private $size;
	private $head;

	/**
	 * Initialize your data structure here.
	 */
	function __construct() {
		$this->size = 0;
		$this->head = new Node();
	}

	/**
	 * Get the value of the index-th node in the linked list. If the index is invalid, return -1.
	 * @param Integer $index
	 * @return Integer
	 */
	function get($index) {
		if($index<0 || $index>=$this->size){
			return -1;
		}
		$cur = $this->head;
		for($i=0; $i<$index+1; $i++){
			$cur = $cur->next;
		}
		return $cur->val;
	}

	/**
	 * Add a node of value val before the first element of the linked list. After the insertion, the new node will be the first node of the linked list.
	 * @param Integer $val
	 * @return NULL
	 */
	function addAtHead($val) {
		$this->addAtIndex(0,$val);
	}

	/**
	 * Append a node of value val to the last element of the linked list.
	 * @param Integer $val
	 * @return NULL
	 */
	function addAtTail($val) {
		$this->addAtIndex($this->size,$val);
	}

	/**
	 * Add a node of value val before the index-th node in the linked list. If index equals to the length of linked list, the node will be appended to the end of linked list. If index is greater than the length, the node will not be inserted.
	 * @param Integer $index
	 * @param Integer $val
	 * @return NULL
	 */
	function addAtIndex($index, $val) {
		#if index < 0, set index=0 in solution, here just return, no set 0
		if($index < 0 || $index > $this->size){
			return;
		}
		$this->size++;
		$pred = $this->head;
		for($i=0; $i<$index; $i++){
			$pred = $pred->next;
		}
		$newNode = new Node($val);
		$newNode->next = $pred->next;
		$pred->next = $newNode;
	}

	/**
	 * Delete the index-th node in the linked list, if the index is valid.
	 * @param Integer $index
	 * @return NULL
	 */
	function deleteAtIndex($index) {
		if($index < 0 || $index >= $this->size){
			return;
		}
		$this->size--;
		$pred = $this->head;
		for($i=0; $i<$index; $i++){
			$pred = $pred->next;
		}
		$pred->next = $pred->next->next;
	}
}

/**
 * Your MyLinkedList object will be instantiated and called as such:
 * $obj = MyLinkedList();
 * $ret_1 = $obj->get($index);
 * $obj->addAtHead($val);
 * $obj->addAtTail($val);
 * $obj->addAtIndex($index, $val);
 * $obj->deleteAtIndex($index);
 */