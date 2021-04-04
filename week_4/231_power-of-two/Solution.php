<?php


class Solution {

	/**
	 * @param Integer $n
	 * @return Boolean
	 */
	function isPowerOfTwo($n) {
		if($n == 0) return false;
		return ($n & -$n) == $n;
	}

	/**
	 * @param Integer $n
	 * @return Boolean
	 */
	function isPowerOfTwoMethodB($n) {
		for($i=0; $i<$i+1; $i++){
			$pow = pow(2,$i);
			if($pow == $n) return true;
			if($pow > $n) return false;
		}
	}
}