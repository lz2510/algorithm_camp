<?php


class Solution
{
	private $n = 0;
	private $k = 0;
	private $output = [];

	/**
	 * @param Integer $n
	 * @param Integer $k
	 * @return Integer[][]
	 */
	function combine($n, $k) {
		$this->n = $n;
		$this->k = $k;
		$this->backtrack(1,[]);
		return $this->output;
	}

	function backtrack($first,$curr){
		if(count($curr) == $this->k){
			$this->output[] = $curr;
			return;
		}
		for($i=$first; $i<$this->n+1; $i++){
			$curr[] = $i;
			$this->backtrack($i+1,$curr);
			array_pop($curr);
		}
	}
}