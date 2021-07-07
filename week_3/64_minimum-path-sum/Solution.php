<?php


class Solution
{

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function minPathSum($grid) {
        $dp = array();
        $rows = count($grid);
        $cols = count($grid[0]);
        for($i = $rows - 1; $i >= 0; $i--){
            for($j = $cols -1; $j >= 0; $j--){
                if($i == $rows -1 && $j != $cols -1){
                    $dp[$i][$j] = $grid[$i][$j] + $dp[$i][$j+1];
                }elseif($j == $cols -1 && $i != $rows -1){
                    $dp[$i][$j] = $grid[$i][$j] + $dp[$i+1][$j];
                }elseif($i != $rows -1 && $j != $cols -1){
                    $dp[$i][$j] = $grid[$i][$j] + min($dp[$i][$j+1],$dp[$i+1][$j]);
                }else{
                    $dp[$i][$j] = $grid[$i][$j];
                }
            }
        }
        return $dp[0][0];
    }

	/**
	 * @param Integer[][] $grid
	 * @return Integer
	 */
	function minPathSum210321($grid) {
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