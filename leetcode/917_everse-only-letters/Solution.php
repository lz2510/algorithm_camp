<?php


class Solution {

	/**
	 * @param String $S
	 * @return String
	 */
	function reverseOnlyLetters($S) {
		$letters = new SplStack();
		$arr = str_split($S);
		foreach($arr as $val){
			if(ctype_alpha($val)){
				$letters->push($val);
			}
		}

		$result = [];
		foreach($arr as $val){
			if(ctype_alpha($val)){
				$result[] = $letters->pop();
			}else{
				$result[] = $val;
			}
		}
		return implode('',$result);
	}
}