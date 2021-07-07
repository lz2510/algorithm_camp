<?php


class Solution
{
	/**
	 * @param String $s
	 * @return Integer
	 */
	function numDecodings($s) {
		$dp = [];
		$dp[0] = 1;
		$dp[1] = $s[0] == '0' ? 0 : 1;
		for($i=2;$i<strlen($s)+1;$i++){
			//init value 0 is necessary
			$dp[$i] = 0;
			if($s[$i-1] != '0'){
				$dp[$i] = $dp[$i-1];
			}

			$twoDigit = substr($s,$i-2,2);
			if($twoDigit >= 10 && $twoDigit <= 26){
				$dp[$i] += $dp[$i-2];
			}
		}

		return $dp[strlen($s)];
	}
}
//explain $dp[0] = 1
//https://leetcode.com/problems/decode-ways/discuss/30358/Java-clean-DP-solution-with-explanation