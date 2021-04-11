<?php


class Solution {

	/**
	 * @param Integer[] $arr1
	 * @param Integer[] $arr2
	 * @return Integer[]
	 */
	function relativeSortArray($arr1, $arr2) {
		$stored = [];
		for($i=0; $i<count($arr1); $i++){
			$num = $arr1[$i];
			if(empty($stored[$num])){
				$stored[$num] = 1;
			}else{
				$stored[$num]++;
			}
		}
		$result = [];
		for($i=0; $i<count($arr2); $i++){
			$num = $arr2[$i];
			if($stored[$num]){
				for($j=0; $j<$stored[$num]; $j++){
					array_push($result,$num);
				}
			}
			unset($stored[$num]);
		}

		ksort($stored);
		foreach($stored as $key=>$val){
			for($i=0; $i<$val; $i++){
				array_push($result,$key);
			}
		}
		return $result;
	}
}