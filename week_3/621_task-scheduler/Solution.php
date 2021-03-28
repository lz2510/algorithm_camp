<?php


class Solution
{
	/**
	 * @param String[] $tasks
	 * @param Integer $n
	 * @return Integer
	 */
	function leastInterval($tasks, $n) {
		$frequencies = array();
		foreach($tasks as $val){
			$frequencies[$val]++;
		}
		rsort($frequencies);
		$fMax = array_shift($frequencies);
		$idleTime = ($fMax-1)*$n;
		foreach($frequencies as $key=>$val){
			$idleTime -= min($fMax-1,$val);
		}
		$idleTime = max(0,$idleTime);
		return count($tasks)+$idleTime;
	}
}