<?php

class Solution {
	/**
	 * @param Integer $n
	 * @return Integer
	 */
	function climbStairs($n) {
		if($n == 1) return 1;
		$dp = [];
		$dp[1] = 1;
		$dp[2] = 2;
		for($i=3; $i<=$n; $i++){
			$dp[$i] = $dp[$i-1] + $dp[$i-2];
		}
		return $dp[$n];
	}
}
