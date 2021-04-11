<?php


class Solution {

	/**
	 * @param String $s
	 * @param Integer $k
	 * @return String
	 */
	function reverseStr($s, $k) {
		for($start = 0; $start < strlen($s); $start += 2*$k){
			$i = $start;
			$j = min($start+$k-1, strlen($s)-1);
			while($i<$j){
				$tmp = $s[$i];
				$s[$i++] = $s[$j];
				$s[$j--] = $tmp;
			}
		}
		return $s;
	}
}