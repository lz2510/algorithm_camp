<?php

function topK($nums, $k){
	$hash = [];
	foreach($nums as $val){
		$hash[$val] = !isset($hash[$val]) ? 1 : $hash[$val]+1;
	}
	var_dump($hash);
	$pq = new SplPriorityQueue();
	foreach($hash as $key=>$val){
		$pq->insert($key,$val);
	}

	$result = [];
	for($i = 0; $i < $k; $i++){
		if(!$pq->isEmpty()){
			$result[] = $pq->extract();
		}
	}

	print_r($result);
}


$nums = [1,1,1,3,2,2,4,4,4,4,4];
$k = 2;
$result = [1,2];
topK($nums,$k);
