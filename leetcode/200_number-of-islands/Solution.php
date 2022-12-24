<?php
class Solution {
    private int $m;
    private int $n;
    /**
     * @param String[][] $grid
     * @return Integer
     */
    function numIslands($grid) {
	//m,n can be used as properties of class, or local variable in each funcions
        $this->m = count($grid);
        if ($this->m == 0) return 0;
        $this->n = count($grid[0]);
        $num = 0;
        for ($i = 0; $i < $this->m; $i++) {
            for ($j = 0; $j < $this->n; $j++) {
                if ($grid[$i][$j] == 1) {
                    $num++;
                    $this->dfsMarking($grid, $i, $j);
                }
            }
        }
        return $num;
    }

    private function dfsMarking(array &$grid, int $i, int $j): void
    {
        if ($i < 0 || $j < 0 || $i >= $this->m || $j >= $this->n || $grid[$i][$j] == 0) {
            return;
        }
        $grid[$i][$j] = 0;
        $this->dfsMarking($grid, $i+1, $j);
        $this->dfsMarking($grid, $i, $j+1);
        $this->dfsMarking($grid, $i-1, $j);
        $this->dfsMarking($grid, $i, $j-1);
    }
}
