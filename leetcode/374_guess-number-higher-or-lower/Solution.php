<?php


/**
 * The API guess is defined in the parent class.
 * @param  num   your guess
 * @return 	     -1 if num is lower than the guess number
 *			      1 if num is higher than the guess number
 *               otherwise return 0
 * public function guess($num){}
 */

class Solution extends GuessGame {
	/**
	 * @param  Integer  $n
	 * @return Integer
	 */
	function guessNumber($n) {
		$low = 1;
		$high = $n;
		while($low<=$high){
			$mid = floor($low + ($high - $low)/2);
			$res = $this->guess($mid);
			if($res == 0){
				return $mid;
			}elseif($res < 0){
				$high = $mid -1;
			}else{
				$low = $mid + 1;
			}
		}
		return -1;
	}
}