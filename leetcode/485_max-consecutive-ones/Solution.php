<?php


class Solution {

	/**
	 * @param Integer[] $nums
	 * @return Integer
	 */
	function findMaxConsecutiveOnes($nums) {
		$count = 0;
		$maxCount = 0;
		for($i=0; $i<count($nums); $i++){
			if($nums[$i] == 1){
				$count++;
			}else{
				if($count > $maxCount){
					$maxCount = $count;
				}
				$count = 0;
			}
		}
		if($count > $maxCount){
			$maxCount = $count;
		}
		return $maxCount;
	}
}