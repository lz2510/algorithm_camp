class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[]
     */
    function topKFrequent($nums, $k) {
        $reqs = array_count_values($nums);
        $queue = new SplPriorityQueue();
        $n = count($nums);
        foreach ($reqs as $num => $req) {
            //if only keep num $k elements and pop up the first max
            //value must be $n - $req
            $queue->insert($num, $n - $req);
            if ($queue->count() > $k) {
                $queue->extract();
            }
        }
        $res = [];
        //as only keep num $k elements, all elements in a queue is valid
        while (!$queue->isEmpty()) {
            $res[] = $queue->extract();    
        }
        //for [1,1,1,2,2,3] the result is [2, 1], the expected is [1, 2]. as value is $n - $req. it's same as this question don't check the order of elements, but not the best. the best should still be store $req as value.
        return $res;
    }
}
//https://leetcode.com/problems/top-k-frequent-elements/solutions/2792424/php-o-nlogk-splpriorityqueue/?q=php&orderBy=most_relevant
