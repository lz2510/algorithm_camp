class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[]
     */
    function topKFrequent($nums, $k) {
        $reqs = array_count_values($nums);
        $queue = new SplPriorityQueue();
        foreach ($reqs as $num => $req) {
            $queue->insert($num, $req);
        }
        $res = [];
        for ($i = 0; $i < $k; $i++) {
            $res[] = $queue->extract(); 
        }

        return $res;
    }
}
