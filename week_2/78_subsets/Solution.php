<?php
class Solution {
    private int $k;
    private array $output;
    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function subsets($nums) {
        for ($i = 0; $i < count($nums) + 1; $i++) {
            $this->k = $i;
            $this->backTrack(0, [], $nums);
        }
        return $this->output;
    }

    private function backTrack(int $first, array $curr, array $nums): void
    {
        if (count($curr) == $this->k) {
            $this->output[] = $curr;
            return;
        }

        for ($i = $first; $i < count($nums); $i++) {
            $curr[] = $nums[$i];
            $this->backTrack($i + 1, $curr, $nums);
            array_pop($curr);
        }
    }
}
