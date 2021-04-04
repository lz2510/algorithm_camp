<?php


class Solution {

	/**
	 * @param Integer[] $nums
	 * @return Integer[]
	 */
	function sortedSquares($nums) {
		$arr = array();
		for($i=0; $i<count($nums); $i++){
			$arr[] = $nums[$i] * $nums[$i];
		}
		sort($arr);
		return $arr;
	}
}