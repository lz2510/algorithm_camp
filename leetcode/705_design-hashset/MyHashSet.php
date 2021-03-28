<?php
class MyHashSet {
	private $bucketArr;
	private $keyRange;
	/**
	 * Initialize your data structure here.
	 */
	function __construct() {
		$this->keyRange = 769;
		for($i=0; $i<$this->keyRange; $i++){
			$this->bucketArr[$i] = new Bucket();
		}

	}

	function generateHash($key)
	{
		return $key%$this->keyRange;
	}

	/**
	 * @param Integer $key
	 * @return NULL
	 */
	function add($key) {
		$hashKey = $this->generateHash($key);
		$this->bucketArr[$hashKey]->add($key);
	}

	/**
	 * @param Integer $key
	 * @return NULL
	 */
	function remove($key) {
		$hashKey = $this->generateHash($key);
		$this->bucketArr[$hashKey]->remove($key);
	}

	/**
	 * Returns true if this set contains the specified element
	 * @param Integer $key
	 * @return Boolean
	 */
	function contains($key) {
		$hashKey = $this->generateHash($key);
		return $this->bucketArr[$hashKey]->contains($key);
	}
}

class Bucket{
	private $container;

	public function __construct()
	{
		$this->container = new SplDoublyLinkedList();
	}

	public function add($val)
	{
		$index = $this->getIndex($val);
		if($index == -1){
			$this->container->push($val);
		}
	}

	public function getIndex($val)
	{
		for($this->container->rewind();$this->container->valid();$this->container->next()){
			if($this->container->current() == $val){
				return $this->container->key();
			}
		}
		return -1;
	}

	public function remove($val)
	{
		$index = $this->getIndex($val);
		if($index != -1){
			$this->container->offsetUnset($index);
		}
	}

	public function contains($val){
		$index = $this->getIndex($val);
		if($index == -1){
			return false;
		}
		return true;
	}
}

/**
 * Your MyHashSet object will be instantiated and called as such:
 * $obj = MyHashSet();
 * $obj->add($key);
 * $obj->remove($key);
 * $ret_3 = $obj->contains($key);
 */