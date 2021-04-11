<?php


class Solution {

	/**
	 * @param Integer[] $nums
	 * @return Integer
	 */
	function rob($nums) {
		if(empty($nums)) return 0;
		$dp = [];
		$dp[0][0] = 0;
		$dp[0][1] = $nums[0];
		$n = count($nums);
		for($i=1; $i<$n; $i++){
			$dp[$i][0] = max($dp[$i-1][1], $dp[$i-1][0]);
			$dp[$i][1] = $dp[$i-1][0] + $nums[$i];
		}
		return max($dp[$n-1][0],$dp[$n-1][1]);
	}
}