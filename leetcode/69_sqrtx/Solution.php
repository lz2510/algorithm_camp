<?php
class Solution {

	/**
	 * @param Integer $x
	 * @return Integer
	 */
	function mySqrt($x) {
		if($x<2) return $x;
		$left = 2;
		$right = $x/2;
		//$right = (int)($x/2);
		while($left<=$right){
			$pivot = (int)($left+($right-$left)/2);
			if($pivot*$pivot > $x){
				$right = $pivot - 1;
			}elseif($pivot*$pivot < $x){
				$left = $pivot + 1;
			}else{
				return $pivot;
			}
		}

		return (int)$right;
		//return $right;
	}
	
	/**
     * @param Integer $x
     * @return Integer
     */
    function mySqrt2($x) {
        for ($i = 0; $i <= $x; $i++) {
            if ($i * $i == $x) {
                return $i;
            } elseif ($i * $i > $x) {
                return $i-1;
            }
        }        
    }
    #https://leetcode.com/problems/sqrtx/discuss/1540023/PHP-Solution
}
