<?php


class Solution {
	/**
	 * @param Integer $n
	 * @return Integer
	 */
	function reverseBits($n) {
		$num = 31;
		$result = 0;
		for($i=$num;$i>=0;$i--){
			$result += ($n & 1) << $i;
			$n = $n >> 1;
		}
		return $result;
	}
}