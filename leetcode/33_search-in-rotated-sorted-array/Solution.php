<?php


class Solution {

	private $nums;
	private $target;

	/**
	 * @param Integer[] $nums
	 * @param Integer $target
	 * @return Integer
	 */
	function search($nums, $target) {
		$this->nums = $nums;
		$this->target = $target;
		$n = count($nums);

		if($n==1){
			return $nums[0]==$this->target ? 0 : -1;
		}

		$rotatedIndex = $this->findRotatedIndex(0,$n-1);

		if($this->nums[$rotatedIndex] == $target){
			return $rotatedIndex;
		}
		if($rotatedIndex==0){
			return $this->searchInRange(0,$n-1);
		}
		if($target<$nums[0]){
			return $this->searchInRange($rotatedIndex,$n-1);
		}
		return $this->searchInRange(0,$rotatedIndex);
	}

	function findRotatedIndex($left,$right){
		if($this->nums[$left] < $this->nums[$right]){
			return 0;
		}
		while($left <= $right){
			$pivot = floor(($left+$right)/2);
			if($this->nums[$pivot]>$this->nums[$pivot+1]){
				return $pivot+1;
			}
			if($this->nums[$pivot]<$this->nums[$left]){
				$right = $pivot -1;
			}else{
				$left = $pivot + 1;
			}
		}
		return 0;
	}

	function searchInRange($left,$right){
		//die('sss');
		while($left <= $right){
			$pivot = floor(($left+$right)/2);
			if($this->nums[$pivot] == $this->target){
				return $pivot;
			}
			if($this->target<$this->nums[$pivot]){
				$right = $pivot -1;
			}else{
				$left = $pivot + 1;
			}
		}
		return -1;
	}

}