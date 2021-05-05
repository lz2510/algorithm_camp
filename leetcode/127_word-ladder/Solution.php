<?php
class Solution {

	/**
	 * @param String $beginWord
	 * @param String $endWord
	 * @param String[] $wordList
	 * @return Integer
	 */
	function ladderLength($beginWord, $endWord, $wordList) {
		$len = strlen($beginWord);
		$allComboDict = [];
		//var_dump($len);
		foreach($wordList as $val){
			for($i=0; $i<$len; $i++){
				$newWord = substr($val,0,$i).'*'.substr($val,$i+1);
				//var_dump($newWord);
				$transformations = !empty($allComboDict[$newWord]) ? $allComboDict[$newWord] : [];
				$transformations[] = $val;
				$allComboDict[$newWord] = $transformations;

			}
		}
		//var_dump($allComboDict);die('ss');
		$q = new SplQueue();
		$q->push([$beginWord,1]);
		$visited = [];
		$visited[$beginWord] = true;
		//var_dump($q);

		while(!$q->isEmpty()){
			$node = $q->bottom();
			$q->shift();
			$word = $node[0];
			$level = $node[1];
			//var_dump($q);
			for($i=0;$i<$len;$i++){
				$newWord = substr($word,0,$i).'*'.substr($word,$i+1);
				//var_dump($newWord);
				$arr = !empty($allComboDict[$newWord]) ? $allComboDict[$newWord] : [];
				//var_dump($allComboDict);
				//var_dump($arr);
				foreach($arr as $adjacentWord){
					if($adjacentWord == $endWord){
						return $level+1;
					}
					if(!$visited[$adjacentWord]){
						$visited[$adjacentWord] = true;
						$q->push([$adjacentWord,$level+1]);
					}
				}
			}
		}
		return 0;
	}
}