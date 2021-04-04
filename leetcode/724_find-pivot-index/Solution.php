<?php


class Solution {

	/**
	 * @param Integer[] $nums
	 * @return Integer
	 */
	function pivotIndex($nums) {
		$leftNum = 0;
		$sumNum = 0;
		foreach($nums as $val){
			$sumNum += $val;
		}
		foreach($nums as $key=>$val){
			if($leftNum == $sumNum - $leftNum - $val){
				return $key;
			}
			$leftNum += $val;
		}
		return -1;
	}
}