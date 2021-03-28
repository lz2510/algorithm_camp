<?php
class MyHashMap {
	private $bucketArr;
	private $keyRange;
	/**
	 * Initialize your data structure here.
	 */
	function __construct() {
		$this->keyRange = 2069;
		for($i=0; $i<$this->keyRange; $i++){
			$this->bucketArr[$i] = new Bucket();
		}
	}

	function generateHashKey($key)
	{
		return $key/$this->keyRange;
	}

	/**
	 * value will always be non-negative.
	 * @param Integer $key
	 * @param Integer $value
	 * @return NULL
	 */
	function put($key, $value) {
		$hashKey = $this->generateHashKey($key);
		$this->bucketArr[$hashKey]->put($key,$value);
	}

	/**
	 * Returns the value to which the specified key is mapped, or -1 if this map contains no mapping for the key
	 * @param Integer $key
	 * @return Integer
	 */
	function get($key) {
		$hashKey = $this->generateHashKey($key);
		return $this->bucketArr[$hashKey]->get($key);
	}

	/**
	 * Removes the mapping of the specified value key if this map contains a mapping for the key
	 * @param Integer $key
	 * @return NULL
	 */
	function remove($key) {
		$hashKey = $this->generateHashKey($key);
		$this->bucketArr[$hashKey]->remove($key);
	}
}

class Bucket{
	private $container;

	public function __construct()
	{
		$this->container = new SplDoublyLinkedList();
	}

	public function put($key,$val)
	{
		$index = $this->getIndex($key);

		if($index != -1){
			$pair = $this->container->offsetGet($index);
			$pair->second = $val;
		}else{
			$this->container->push(new ListPair($key,$val));
		}
	}

	public function get($key){
		$index = $this->getIndex($key);
		if($index != -1){
			$pair = $this->container->offsetGet($index);
			return $pair->second;
		}
		return -1;
	}

	public function remove($key){
		$index = $this->getIndex($key);
		if($index != -1){
			$this->container->offsetUnset($index);
		}
	}

	public function getIndex($key)
	{
		for($this->container->rewind(); $this->container->valid(); $this->container->next()){
			if($this->container->current()->first==$key){
				return $this->container->key();
			}
		}
		return -1;
	}
}

class ListPair{
	public $first;
	public $second;
	public function __construct($first,$second){
		$this->first = $first;
		$this->second = $second;
	}
}

/**
 * Your MyHashMap object will be instantiated and called as such:
 * $obj = MyHashMap();
 * $obj->put($key, $value);
 * $ret_2 = $obj->get($key);
 * $obj->remove($key);
 */