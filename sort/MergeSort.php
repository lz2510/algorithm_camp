<?php
class MergeSort
{
    public function mergeSortFunc(array &$arr, int $left, int $right): void
    {
        if ($left >= $right) return;
        $mid = floor(($right + $left) / 2);
        //$mid = $left + floor(($right - $left) / 2);
        $this->mergeSortFunc($arr, $left, $mid);
        $this->mergeSortfunc($arr, $mid + 1, $right);
        $this->merge($arr, $left, $mid, $right);
    }

    private function merge(array &$arr, int $left, int $mid, int $right): void
    {
        $i = $left;
        $j = $mid + 1;
        $k = 0;
        $tmp = [];
        while ($i <= $mid && $j <= $right) {
            $tmp[$k++] = $arr[$i] < $arr[$j] ? $arr[$i++] : $arr[$j++];
        }

        while ($i <= $mid) {
            $tmp[$k++] = $arr[$i++];
        }
        while ($j <= $right) {
            $tmp[$k++] = $arr[$j++];
        }

        for ($t = 0; $t < count($tmp); $t++) {
            $arr[$left + $t] = $tmp[$t];
        }
    }
}

$mergeSort = new MergeSort();
$arr = [38, 27, 43, 3, 9, 82, 10];
$mergeSort->mergeSortFunc($arr, 0, count($arr) - 1);
var_dump($arr);

