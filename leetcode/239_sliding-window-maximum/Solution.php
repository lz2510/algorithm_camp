<?php
class Solution {
	private $queue;

	//Brut Force, time complexity: O(Nk)
	//Heap, time complexity: O(Nlog(k))
	//Double Ended Queue, time complexity: O(N)
	//Dynamic programming, time complexity: O(N)
	/**
	 * @param Integer[] $nums
	 * @param Integer $k
	 * @return Integer[]
	 */
	function maxSlidingWindow($nums, $k) {
		$n = count($nums);
		if($n*$k==0) return [0];
		if($k==1) return $nums;

		$this->queue = new SplQueue();
		$maxIndex = 0;
		for($i=0;$i<$k;$i++){
			$this->clearQueue($nums,$i,$k);
			$this->queue->push($i);
			if($nums[$i] > $nums[$maxIndex]) $maxIndex = $i;
		}
		$result = [];
		$result[0] = $nums[$maxIndex];
		for($i=$k;$i<$n;$i++){
			$this->clearQueue($nums,$i,$k);
			$this->queue->push($i);
			$result[$i-$k+1] = $nums[$this->queue->bottom()];
		}
		return $result;
	}

	function clearQueue($nums,$i,$k){
		if(!$this->queue->isEmpty() && $this->queue->bottom() == $i-$k){
			$this->queue->shift();
		}

		while(!$this->queue->isEmpty() && $nums[$i] > $nums[$this->queue->top()]){
			$this->queue->pop();
		}
	}
}