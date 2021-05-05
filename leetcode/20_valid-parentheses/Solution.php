<?php
class Solution {

	/**
	 * @param String $s
	 * @return Boolean
	 */
	function isValid($s) {
		$mapping = [')'=>'(',']'=>'[','}'=>'{'];
		$stack = new SplStack();
		for($i=0; $i<strlen($s); $i++){
			$char = $s[$i];
			if(array_key_exists($char,$mapping)){
				$top = $stack->isEmpty() ? '#' : $stack->pop();
				if($top != $mapping[$char]){
					return false;
				}
			}else{
				$stack->push($char);
			}
		}
		return $stack->isEmpty();
	}
}
