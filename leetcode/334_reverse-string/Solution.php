<?php
class Solution {

	/**
	 * @param String[] $s
	 * @return NULL
	 */
	function reverseString(&$s) {
		$this->helper($s,0,count($s)-1);
	}

	function helper(&$s,$left,$right){
		if($left>=$right){
			return;
		}

		$tmp = $s[$left];
		$s[$left++] = $s[$right];
		$s[$right--] = $tmp;
		$this->helper($s,$left,$right);
	}
}