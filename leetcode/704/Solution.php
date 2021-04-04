<?php


class Solution {

	/**
	 * @param Integer[] $nums
	 * @param Integer $target
	 * @return Integer
	 */
	function search($nums, $target) {
		$left = 0;
		$pivot = 0;
		$right = count($nums)-1;
		while($left <= $right){
			$pivot = $left + ($right - $left)%2;
			if($nums[$pivot] == $target){
				return $pivot;
			}
			if($target < $nums[$pivot]){
				$right = $pivot -1;
			}else{
				$left = $pivot + 1;
			}
		}
		return -1;
	}
}