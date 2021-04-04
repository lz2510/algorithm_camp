<?php


class Solution {
	/**
	 * @param Integer $n
	 * @return Integer
	 */
	function hammingWeight($n) {
		$mask = 1;
		$num = 0;
		for($i=0; $i<32; $i++){
			if(($n&$mask) != 0){
				$num++;
			}
			$mask = $mask << 1;
		}
		return $num;
	}

	/**
	 * @param Integer $n
	 * @return Integer
	 */
	function hammingWeightMethodB($n) {
		return strlen(str_replace('0','',decbin($n)));
	}
}