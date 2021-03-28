<?php
class Node{
	public $val;
	public $next;
	function __construct($val){
		$this->val = $val;
		$this->next = null;
	}
}

class MyCircularQueue {
	private $capacity;
	private $count;
	private $head;
	private $tail;
	/**
	 * @param Integer $k
	 */
	function __construct($k) {
		$this->capacity = $k;
	}

	/**
	 * @param Integer $value
	 * @return Boolean
	 */
	function enQueue($value) {
		if($this->isFull()){
			return false;
		}
		$newNode = new Node($value);

		if($this->count == 0){
			$this->head = $newNode;
			$this->tail = $newNode;
		}
		$this->tail->next = $newNode;
		$this->tail = $newNode;
		$this->count++;
		return true;
	}

	/**
	 * @return Boolean
	 */
	function deQueue() {
		if($this->count == 0){
			return false;
		}
		$this->head = $this->head->next;
		$this->count--;
		return true;
	}

	/**
	 * @return Integer
	 */
	function Front() {
		if($this->isEmpty()){
			return -1;
		}
		return $this->head->val;
	}

	/**
	 * @return Integer
	 */
	function Rear() {
		if($this->isEmpty()){
			return -1;
		}

		return $this->tail->val;
	}

	/**
	 * @return Boolean
	 */
	function isEmpty() {
		return $this->count == 0;
	}

	/**
	 * @return Boolean
	 */
	function isFull() {
		return $this->count == $this->capacity;
	}
}

/**
 * Your MyCircularQueue object will be instantiated and called as such:
 * $obj = MyCircularQueue($k);
 * $ret_1 = $obj->enQueue($value);
 * $ret_2 = $obj->deQueue();
 * $ret_3 = $obj->Front();
 * $ret_4 = $obj->Rear();
 * $ret_5 = $obj->isEmpty();
 * $ret_6 = $obj->isFull();
 */