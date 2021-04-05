<?php
class Solution {

    /**
     * Time complexity:O(n)
     * Space complexity:O(n)
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $map = array();
        foreach($nums as $key=>$val){
            $map[$val] = $key;
        }
        for($i=0; $i<count($nums); $i++){
            $targetItem = $target - $nums[$i];
            if(isset($map[$targetItem]) && $map[$targetItem] != $i){
                return array($i,$map[$targetItem]);
            }
        }
        return array(0,0);
    }
}
