<?php
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function mySqrt($x) {
        if ($x == 0 || $x == 1) {
            return $x;
        }
        //another way is use below, but if ($x == 0 || $x == 1) is more visulized.
        //if($x<2) return $x;
        $left = 0;
        //right can be initially as x or x/2. As For x≥2 the square root is always smaller than x/2 and larger than 0 : 0 < a < x/2.
        //if right is x, then follow binary search templte. if right is x/w, then it's more specified for square root.
        $right = $x;
        //$right = (int)($x / 2);
        while ($left <= $right) {
            $mid = (int)($left + ($right - $left) / 2);
            if ($mid * $mid > $x) {
                $right = $mid - 1;
            } elseif ($mid * $mid < $x) {
                $left = $mid + 1;
            } else {
                return $mid;
            }
        }
        //return right not left, as the question is return round down the nearest integer, which mean the biggest integer. right is bigger than left.
        return $right;
    }
}
