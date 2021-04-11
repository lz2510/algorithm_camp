<?php


class Solution {

	/**
	 * https://leetcode-cn.com/circle/article/qiAgHn/
	 * @param Integer[] $prices
	 * @return Integer
	 */
	function maxProfit($prices) {
		if(empty($prices)) return 0;
		$n = count($prices);
		$dp = [];
		$dp[0][0] = 0;
		$dp[0][1] = -$prices[0];
		for($i=1; $i<$n; $i++){
			$dp[$i][0] = max($dp[$i-1][0],$dp[$i-1][1]+$prices[$i]);
			$dp[$i][1] = max($dp[$i-1][1],$dp[$i-1][0]-$prices[$i]);
		}
		return $dp[$n-1][0];
	}

	/**
	 * @param Integer[] $prices
	 * @return Integer
	 */
	function maxProfitNormal($prices) {
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