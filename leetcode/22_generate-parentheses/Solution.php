<?php
class Solution {
    private array $result;

    /**
     * @param Integer $n
     * @return String[]
     */
    function generateParenthesis($n) {
        $this->generate(0, 0, $n, '');
        return $this->result;
    }

    private function generate(int $left, int $right, int $n, string $str): void
    {
        if ($left == $n && $right == $n) {
            $this->result[] = $str;
            return;
        }

        //$this->generate($left + 1, $right, $n, $str . '(');
        //above combine current logic and drill down
        //$str = $str . '('; //process current logic
        //$this->generate($left + 1, $right, $n, $str); //drill down

        //left 随时可以加，只要别超标
        if ($left < $n) {
            $this->generate($left + 1, $right, $n, $str . '(');
        }
        
        //right 左个数>右个数
        //if ($left > $right && $right < $n), right needs less than n. but because right less than left and left less than n, so right has to less than. So remove $right < $n, as 100% true when $left > $right 
        if ($left > $right) {
            $this->generate($left, $right + 1, $n, $str . ')');
        }
        
    }
}
