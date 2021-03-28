<?php


class Solution
{
	/**
	 * @param Integer[][] $grid
	 * @return Integer
	 */
	function minPathSum($grid) {
		$dp = [];
		for($i=count($grid)-1; $i>=0; $i--){
			for($j=count($grid[0]); $j>=0; $j--){
				if($i==count($grid)-1 && $j!=count($grid[0])-1){
					$dp[$i][$j] = $grid[$i][$j] + $dp[$i][$j+1];
				}elseif($j == count($grid[0])-1 && $i != count($grid)-1){
					$dp[$i][$j] = $grid[$i][$j] + $dp[$i+1][$j];
				}elseif($j != count($grid[0])-1 && $i != count($grid)-1){
					$mini = $dp[$i+1][$j] < $dp[$i][$j+1] ? $dp[$i+1][$j] : $dp[$i][$j+1];
					$dp[$i][$j] = $grid[$i][$j] + $mini;
				}else{
					$dp[$i][$j] = $grid[$i][$j];
				}
			}
		}
		return $dp[0][0];
	}
}