<?php


class Solution {

	/**
	 * @param Integer[] $prices
	 * @return Integer
	 */
	function maxProfit($prices) {
		$maxProfit = 0;
		for($i=1; $i<count($prices); $i++){
			if($prices[$i] > $prices[$i-1]){
				$maxProfit += $prices[$i] - $prices[$i-1];
			}
		}
		return $maxProfit;
	}

	/**
	 * timeout when submit
	 */
	function maxProfitBF($prices) {
		return $this->calculate($prices, 0);
	}

	function calculate($prices, $s){
		if($s >= count($prices)){
			return 0;
		}
		$max = 0;
		for($start = $s; $start < count($prices); $start++){
			$maxProfit = 0;
			for($i = $start+1; $i < count($prices); $i++){
				if($prices[$start] < $prices[$i]){
					$profit = $this->calculate($prices,$i+1) + $prices[$i] - $prices[$start];
					if($profit > $maxProfit){
						$maxProfit = $profit;
					}
				}
			}
			if($maxProfit > $max){
				$max = $maxProfit;
			}
		}
		return $max;
	}
}