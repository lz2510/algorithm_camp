<?php


class Solution {

	/**
	 * @param String $s
	 * @return String
	 */
	function reverseWords($s) {
		$arr = explode(' ',$s);
		$result = [];
		foreach($arr as $val){
			$result[] = strrev($val);
		}
		return implode(' ',$result);
	}
}