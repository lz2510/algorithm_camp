<?php


class MergeSort
{
    public function mergeSortFunc(&$arr, $left, $right)
    {
        if($left >= $right) return;
        $mid = floor(($right + $left)/2);
        $this->mergeSortFunc($arr, $left, $mid);
        $this->mergeSortFunc($arr, $mid+1, $right);
        $this->merge($arr, $left, $mid, $right);
        return $arr;
    }

    public function merge(&$arr, $left, $mid, $right)
    {
        $i = $left;
        $j = $mid + 1;
        $k = 0;
        $tmp = array();
        while($i <= $mid && $j <= $right){
            $tmp[$k++] = $arr[$i] < $arr[$j] ? $arr[$i++] : $arr[$j++];
        }
        while($i <= $mid){
            $tmp[$k++] = $arr[$i++];
        }
        while($j <= $right){
            $tmp[$k++] = $arr[$j++];
        }
        for($t = 0; $t < count($tmp); $t++){
            $arr[$left+$t] = $tmp[$t];
        }
    }
}

$mergeSort = new MergeSort();
$arr = array(5,3,9,7,4,8);
$result = $mergeSort->mergeSortFunc($arr, 0, count($arr)-1);
var_dump($result);