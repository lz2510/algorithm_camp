<?php


class Solution {

	/**
	 * @param Integer[] $nums
	 * @return Integer
	 */
	function findNumbers($nums) {
		$count = 0;
		for($i=0; $i<count($nums); $i++){
			if(strlen($nums[$i])%2 == 0){
				$count++;
			}
		}
		return $count;
	}
}