<?php


class Solution
{
	/**
	 * @param Integer[] $bills
	 * @return Boolean
	 */
	function lemonadeChange($bills) {
		$five = $ten = 0;
		foreach($bills as $bill){
			if($bill == 5){
				$five++;
			}elseif($bill == 10){
				if($five == 0) return false;
				$five--;
				$ten++;
			}else{
				if($ten>=1 && $five>=1){
					$ten--;
					$five--;
				}elseif($five>=3){
					$five-=3;
				}else{
					return false;
				}
			}
		}
		return true;
	}
}