<?php


class Solution {

	/**
	 * @param Integer[] $nums
	 * @return Boolean
	 */
	function containsDuplicate($nums) {
		$hashSet = new MyHashSet();
		foreach($nums as $val){
			if($hashSet->contains($val)){
				return true;
			}
			$hashSet->add($val);
		}
		return false;
	}
}

class MyHashSet {

	private $bucketArr = [];
	private $keyRange;

	/**
	 * Initialize your data structure here.
	 */
	function __construct() {
		$this->keyRange = 769;
		for($i=0; $i<$this->keyRange; $i++){
			$this->bucketArr[$i] = new Bucket();
		}

		//as key may negative number, like -2, need identify to 2, so add negative range
		$this->keyRangeNegative = -769;
		for($i=$this->keyRangeNegative; $i<0; $i++){
			$this->bucketArr[$i] = new Bucket();
		}
	}

	private function hash($key){
		return $key % $this->keyRange;
	}

	/**
	 * @param Integer $key
	 * @return NULL
	 */
	function add($key) {
		$bucketIndex = $this->hash($key);
		$this->bucketArr[$bucketIndex]->insert($key);
	}

	/**
	 * Returns true if this set contains the specified element
	 * @param Integer $key
	 * @return Boolean
	 */
	function contains($key) {
		$bucketIndex = $this->hash($key);
		return $this->bucketArr[$bucketIndex]->exists($key);
	}
}

class Bucket{

	public $size = 0;
	public $head;

	public function __construct()
	{
		$this->size = 0;
		$this->head = new ListNode(0);
	}

	public function insert($key){
		$this->addAtIndex($this->size, $key);
	}

	/**
	 * Add a node of value val before the index-th node in the linked list. If index equals to the length of linked list, the node will be appended to the end of linked list. If index is greater than the length, the node will not be inserted.
	 * @param Integer $index
	 * @param Integer $val
	 * @return NULL
	 */
	function addAtIndex($index, $val) {
		$searchIndex = $this->searchIndex($val);
		if($searchIndex != '-1'){
			return;
		}

		if($index > $this->size) return;
		if($index < 0) $index = 0;

		$this->size++;
		$pred = $this->head;
		for($i=0; $i<$index; $i++){
			$pred = $pred->next;
		}

		$toAdd = new ListNode($val);
		$toAdd->next = $pred->next;
		$pred->next = $toAdd;
	}



	function searchIndex($key){
		$pred = $this->head;
		for($i=0;$i<$this->size;$i++){
			//as sentinel, should move to next first that is actually index 0 element
			$pred = $pred->next;
			if($pred->val === $key){
				return $i;
			}

		}

		return -1;
	}


	public function exists($key){
		$index = $this->searchIndex($key);
		if($index >=0){
			return true;
		}else{
			return false;
		}
	}
}

/**
 * Your MyHashSet object will be instantiated and called as such:
 * $obj = MyHashSet();
 * $obj->add($key);
 * $obj->remove($key);
 * $ret_3 = $obj->contains($key);
 */