<?php


class Solution {

	/**
	 * @param Integer[] $nums1
	 * @param Integer[] $nums2
	 * @return Integer[]
	 */
	function intersection($nums1, $nums2) {
		$numsSet1 = array();
		$numsSet2 = array();
		foreach($nums1 as $val){
			$numsSet1[$val] = true;
		}
		foreach($nums2 as $val){
			$numsSet2[$val] = true;
		}
		$result = array();
		foreach($numsSet1 as $num=>$val){
			if(isset($numsSet2[$num])){
				$result[] = $num;
			}
		}
		return $result;
	}
}