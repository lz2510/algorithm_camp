<?php


class Solution {

    /**
     * @param String $text1
     * @param String $text2
     * @return Integer
     */
    function longestCommonSubsequence($text1, $text2) {
        $m = strlen($text1);
        $n = strlen($text2);
        $dp = array();

        //$dp lenght is $text1+1, $text2+1, as need init a row and a col
        for($i = 0; $i < $m+1; $i++){
            $dp[$i][0] = 0;
        }

        for($j = 0; $j < $n+1; $j++){
            $dp[0][$j] = 0;
        }

        for($i = 1; $i < $m+1; $i++){
            for($j = 1; $j < $n+1; $j++){
                if($text1[$i-1] == $text2[$j-1]){
                    $dp[$i][$j] = $dp[$i-1][$j-1] + 1;
                }else{
                    $dp[$i][$j] = max($dp[$i][$j-1], $dp[$i-1][$j]);
                }
            }
        }

        return $dp[$m][$n];
    }
}
//https://leetcode.com/problems/longest-common-subsequence/discuss/599338/php-Longest-Common-Subsequence