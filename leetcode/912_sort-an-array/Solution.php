<?php


class Solution {

	/**
	 * @param Integer[] $nums
	 * @return Integer[]
	 */
	function sortArray($nums) {
		if(count($nums)<=1){
			return $nums;
		}
		$pivot = count($nums)/2;
		$leftList = $this->sortArray(array_slice($nums,0,$pivot));
		$rightList = $this->sortArray(array_slice($nums,$pivot));
		return $this->merge($leftList,$rightList);
	}

	function merge($leftList, $rightList)
	{
		$leftCursor = 0;
		$rightCursor = 0;
		$retCursor = 0;
		while($leftCursor < count($leftList) && $rightCursor < count($rightList)){
			if($leftList[$leftCursor] < $rightList[$rightCursor]){
				$retList[$retCursor] = $leftList[$leftCursor];
				$leftCursor++;
				$retCursor++;
			}else{
				$retList[$retCursor] = $rightList[$rightCursor];
				$retCursor++;
				$rightCursor++;
			}

		}

		while($leftCursor < count($leftList)){
			$retList[$retCursor] = $leftList[$leftCursor];
			$retCursor++;
			$leftCursor++;
		}

		while($rightCursor < count($rightList)){
			$retList[$retCursor] = $rightList[$rightCursor];
			$retCursor++;
			$rightCursor++;
		}

		return $retList;
	}
}