<?php


class Solution {

	/**
	 * @param Integer[] $arr
	 * @return NULL
	 */
	function duplicateZeros(&$arr) {
		$possibleDups = 0;
		$length = count($arr) - 1;

		for($left = 0; $left <= $length - $possibleDups; $left++){
			if($arr[$left] == 0){
				if($left == $length - $possibleDups){
					$arr[$length] = 0;
					$length--;
					break;
				}
				$possibleDups++;
			}
		}

		$last = $length - $possibleDups;

		for($i=$last; $i>=0; $i--){
			if($arr[$i]==0){
				$arr[$i+$possibleDups] = 0;
				$possibleDups--;
				$arr[$i+$possibleDups] = 0;
			}else{
				$arr[$i+$possibleDups] = $arr[$i];
			}
		}

	}
}