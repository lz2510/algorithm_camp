class Solution {

	/**
	* @param Integer[] $nums
	* @return Integer
	*/
	function majorityElement($nums) {
		$counts = [];
		$size = count($nums)/2;
		foreach($nums as $num){
			if($counts[$num] === null){
				$counts[$num] = 0;
			}
			$counts[$num]++;
			if($counts[$num] > $size) return $num;
		}
	}
}