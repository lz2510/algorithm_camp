<?php
class Solution {

    /**
     * @param Float $x
     * @param Integer $n
     * @return Float
     */
    function myPow($x, $n) {
        if ($n < 0) {
            $x = 1 / $x;
            $n = -$n;
        }
        return $this->calculatePower($x, $n);
    }

    private function calculatePower(float $x, int $n)
    {
        if ($n == 0) {
            return 1;
        }
        //below terminal is optional
        //if ($n == 1) {
            //return $x;
        //}
        $half = $this->calculatePower($x, $n / 2);
        if ($n % 2 == 1) {
            return $half * $half * $x;
        } else {
            return $half * $half;
        }
    }
}
