<?php
class Solution {
	  /**
     * @param Integer $x
     * @return Integer
     */
    function mySqrt($x) {
        for ($i = 0; $i <= $x; $i++) {
            if ($i * $i == $x) {
                return $i;
            } elseif ($i * $i > $x) {
                return $i-1;
            }
        }        
    }
    #https://leetcode.com/problems/sqrtx/discuss/1540023/PHP-Solution
}
