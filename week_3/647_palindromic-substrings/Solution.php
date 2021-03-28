<?php


class Solution
{
	/**
	 * @param String $s
	 * @return Integer
	 */
	function countSubstrings($s) {
		$n = strlen($s);
		$ans = 0;
		for($i=0; $i<$n; $i++){
			$dp[$i][$i] = true;
			$ans++;
		}

		for($i=0; $i<$n-1; $i++){
			$dp[$i][$i+1] = ($s[$i]==$s[$i+1] ? true : false);
			$ans += ($dp[$i][$i+1] ? 1 : 0);
		}

		for($len=3; $len<=$n; $len++){
			for($i=0,$j=$i+$len-1;$j<$n;$i++,$j++){
				$dp[$i][$j] = $dp[$i+1][$j-1] && $s[$i] == $s[$j];
				$ans += ($dp[$i][$j] ? 1 : 0);
			}
		}
		return $ans;
	}
}