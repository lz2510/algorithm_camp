<?php


class Solution {

	/**
	 * @param Integer[] $nums
	 * @return NULL
	 */
	function moveZeroes(&$nums) {

		$zeroNum = 0;
		for($i=0; $i<count($nums); $i++){
			if($nums[$i]==0){
				$zeroNum++;
				//unset($nums[$i]);
			}
		}
		$arr = array();
		for($i=0; $i<count($nums); $i++){
			if($nums[$i]!=0){
				//$zeroNum++;
				//unset($nums[$i]);
				$arr[] = $nums[$i];
			}
		}
		//var_dump($nums);

		for($i=0;$i<$zeroNum;$i++){
			$arr[] = 0;
		}
		$nums = $arr;
	}
}