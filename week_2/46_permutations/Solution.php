<?php


class Solution
{
	/**
	 * @param Integer[] $nums
	 * @return Integer[][]
	 */
	function permute($nums) {
		$output = [];
		$n = count($nums);
		$this->backtrack($n,$nums,$output,0);
		return $output;
	}

	function backtrack($n,$nums,&$output,$first){
		if($first == $n){
			$output[] = $nums;
			return;
		}
		for($i=$first; $i<$n; $i++){
			$this->swap($nums,$first,$i);
			$this->backtrack($n,$nums,$output,$first+1);
			$this->swap($nums,$first,$i);
		}
	}

	function swap(&$nums,$i,$j){
		$temp = $nums[$i];
		$nums[$i] = $nums[$j];
		$nums[$j] = $temp;
	}
}