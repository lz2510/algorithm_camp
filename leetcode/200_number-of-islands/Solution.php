<?php
class Solution {

	/**
	 * @param String[][] $grid
	 * @return Integer
	 */
	function numIslands($grid) {
		$count = 0;
		$n = count($grid);
		if($n==0) return 0;
		$m = count($grid[0]);
		for($i=0; $i<$n; $i++){
			for($j=0; $j<$m; $j++){
				if($grid[$i][$j] == 1){
					$this->dfs($grid,$i,$j);
					$count++;
				}
			}
		}
		return $count;
	}

	function dfs(&$grid,$i,$j){
		$n = count($grid);
		if($n==0) return 0;
		$m = count($grid[0]);
		if($i<0 || $j<0 || $i>=$n || $j>=$m || $grid[$i][$j] == 0){
			return;
		}
		$grid[$i][$j] = 0;
		$this->dfs($grid,$i-1,$j);
		$this->dfs($grid,$i+1,$j);
		$this->dfs($grid,$i,$j-1);
		$this->dfs($grid,$i,$j+1);
	}

}
