<?php


class Solution {

	/**
	 * @param String $s
	 * @return Integer
	 */
	function firstUniqChar($s) {
		$arr = [];
		for($i=0; $i<strlen($s); $i++){
			$char = $s[$i];
			if(empty($arr[$char])){
				$arr[$char] = 1;
			}else{
				$arr[$char]++;
			}
		}
		for($i=0; $i<strlen($s); $i++){
			$char = $s[$i];
			if($arr[$char]==1){
				return $i;
			}
		}
		return -1;
	}
}