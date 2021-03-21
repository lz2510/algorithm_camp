<?php


class Solution
{
	private $output = [];
	private $k;

	/**
	 * @param Integer[] $nums
	 * @return Integer[][]
	 */
	function subsets($nums) {
		for($k=0; $k< count($nums)+1; $k++){
			$this->k = $k;
			$this->backtrack(0,[],$nums);
		}
		return $this->output;
	}

	function backtrack($first, $cur, $nums){
		if(count($cur) == $this->k){
			$this->output[] = $cur;
			return;
		}
		for($i=$first; $i<count($nums); $i++){
			$cur[] = $nums[$i];
			$this->backtrack($i+1,$cur,$nums);
			array_pop($cur);
		}
	}
}