<?php
class Node {
	public $val;
	public $mini;
	public $next;

	function __construct($val=null,$mini=null){
		$this->val = $val;
		$this->mini = $mini;
		$this->next = null;
	}
}

class MinStack {
	private $head;
	private $length;

	/**
	 * initialize your data structure here.
	 */
	function __construct() {
		$this->head = new Node();
		$this->length = 0;
	}

	/**
	 * @param Integer $x
	 * @return NULL
	 */
	function push($x) {
		if($this->head->next->mini === null){
			$mini = $x;
		}else{
			$mini = $x < $this->head->next->mini ? $x : $this->head->next->mini;
		}

		$newNode = new Node($x,$mini);
		$newNode->next = $this->head->next;
		$this->head->next = $newNode;

		$this->length++;
	}

	/**
	 * @return NULL
	 */
	function pop() {
		$this->head->next = $this->head->next->next;
	}

	/**
	 * @return Integer
	 */
	function top() {
		return $this->head->next->val;
	}

	/**
	 * @return Integer
	 */
	function getMin() {
		return $this->head->next->mini;
	}
}

/**
 * Your MinStack object will be instantiated and called as such:
 * $obj = MinStack();
 * $obj->push($x);
 * $obj->pop();
 * $ret_3 = $obj->top();
 * $ret_4 = $obj->getMin();
 */