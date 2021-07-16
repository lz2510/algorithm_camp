<?php


class QuickSort
{
    public function quickSortFunc(&$arr, $begin, $end)
    {
        if($begin >= $end) return;
        $pivot = $this->partition($arr, $begin, $end);
        $this->quickSortFunc($arr, 0, $pivot - 1);
        $this->quickSortFunc($arr, $pivot + 1, $end);
        return $arr;
    }

    public function partition(&$arr, $begin, $end)
    {
        $pivot = $end;
        $counter = $begin;
        for($i = $begin; $i <= $end; $i++){
            if($arr[$i] < $arr[$pivot]){
                $tmp = $arr[$counter];
                $arr[$counter] = $arr[$i];
                $arr[$i] = $tmp;
                $counter++;
            }
        }
        $tmp = $arr[$pivot];
        $arr[$pivot] = $arr[$counter];
        $arr[$counter] = $tmp;
        return $counter;
    }
}
$quickSort = new QuickSort();
$arr = array(5,3,9,7,4,8);
$result = $quickSort->quickSortFunc($arr, 0, count($arr)-1);
var_dump($result);