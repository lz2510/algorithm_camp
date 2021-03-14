<?php
class Solution {

	/**
	 * @param Integer[] $nums1
	 * @param Integer $m
	 * @param Integer[] $nums2
	 * @param Integer $n
	 * @return NULL
	 */
	function merge(&$nums1, $m, $nums2, $n) {
		$nums1Copy = array();
		for($i=0; $i<$m; $i++){
			$nums1Copy[$i] = $nums1[$i];
		}

		$p1 = 0;
		$p2 = 0;
		for($p=0; $p< $m+$n; $p++){
			if($p2>=$n || ($p1<$m && $nums1Copy[$p1]<=$nums2[$p2])){
				$nums1[$p] = $nums1Copy[$p1++];
			}else{
				$nums1[$p] = $nums2[$p2++];
			}
		}
	}
}