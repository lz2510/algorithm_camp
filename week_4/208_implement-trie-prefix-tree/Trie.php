<?php


class TrieNode{
	public $isEnd = false;
	public $child = [];
}

class Trie {
	public $node = [];
	/**
	 * Initialize your data structure here.
	 */
	function __construct() {
		$this->node = new TrieNode();
	}

	/**
	 * Inserts a word into the trie.
	 * @param String $word
	 * @return NULL
	 */
	function insert($word) {
		$len = strlen($word);
		$node = $this->node;
		for($i=0; $i<$len; $i++){
			$char = $word[$i];
			if(array_key_exists($char,$node->child)){
				$node = $node->child[$char];
				continue;
			}
			$node->child[$char] = new TrieNode();
			$node = $node->child[$char];
		}
		$node->isEnd = true;
	}

	/**
	 * Returns if the word is in the trie.
	 * @param String $word
	 * @return Boolean
	 */
	function search($word) {
		$len = strlen($word);
		$node = $this->node;
		for($i=0; $i<$len; $i++){
			$char = $word[$i];
			if(!array_key_exists($char,$node->child)){
				return false;
			}
			$node = $node->child[$char];
		}
		return $node->isEnd;
	}

	/**
	 * Returns if there is any word in the trie that starts with the given prefix.
	 * @param String $prefix
	 * @return Boolean
	 */
	function startsWith($prefix) {
		$len = strlen($prefix);
		$node = $this->node;
		for($i=0; $i<$len; $i++){
			$char = $prefix[$i];
			if(!array_key_exists($char,$node->child)){
				return false;
			}
			$node = $node->child[$char];
		}
		return true;
	}
}

/**
 * Your Trie object will be instantiated and called as such:
 * $obj = Trie();
 * $obj->insert($word);
 * $ret_2 = $obj->search($word);
 * $ret_3 = $obj->startsWith($prefix);
 */