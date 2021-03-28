<?php


class Solution
{
	/**
	 * @param String[][] $matrix
	 * @return Integer
	 */
	function maximalSquare($matrix) {
		$mI = count($matrix);
		$mJ = count($matrix[0]);
		$max = 0;
		for($i=0;$i<$mI;$i++){
			if($matrix[$i][0]==='1'){
				$max = 1;
				break;
			}
		}
		if($max===0){
			for($j=0;$j<$mJ;$j++){
				if($matrix[0][$j]==='1'){
					$max = 1;
					break;
				}
			}
		}
		for($i=1;$i<$mI;$i++){
			for($j=1;$j<$mJ;$j++){
				if($matrix[$i][$j]==='1'){
					if($max===0){
						$max = 1;
					}
					if($matrix[$i-1][$j]*$matrix[$i][$j-1]*$matrix[$i-1][$j-1]>0){
						$matrix[$i][$j] = min($matrix[$i-1][$j], $matrix[$i][$j-1], $matrix[$i-1][$j-1])+1;
						if($matrix[$i][$j]>$max){
							$max = $matrix[$i][$j];
						}
					}
				}
			}
		}
		return $max*$max;
	}
}