<?php

class Solution {

	/**
	 * @param String $s
	 * @return String
	 */
	function reverseWords($s) {
		$s = trim($s);
		$arr = preg_split('/\s+/',$s);
		$arr = array_reverse($arr);
		return implode(' ',$arr);
	}
}