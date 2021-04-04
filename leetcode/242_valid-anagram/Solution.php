<?php


class Solution {

	/**
	 * @param String $s
	 * @param String $t
	 * @return Boolean
	 */
	function isAnagram($s, $t) {
		$strLenS = strlen($s);
		$strLenT = strlen($t);
		if($strLenS != $strLenT) return false;
		$strHashTable = [];
		for($i=0; $i<$strLenS; $i++){
			$strHashTable[$s[$i]]++;
		}
		for($j=0; $j<$strLenT; $j++){
			if(!$strHashTable[$t[$j]] or $strHashTable[$t[$j]] < 0){
				return false;
			}
			$strHashTable[$t[$j]]--;
		}
		return true;
	}
}