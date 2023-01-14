class Solution {

    /**
     * @param Integer[] $numbers
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($numbers, $target) {
        $i = 0;
        $j = count($numbers) - 1;
        while ($i < $j) {
            $sum = $numbers[$i] + $numbers[$j];
            if ($sum == $target) {
                return [$i + 1, $j + 1];
            } elseif ($sum < $target) {
                $i++;
            } else {
                $j--;
            }
        }
    }
}
