<?php
class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {
        for ($i = 0; $i <= count($nums); $i++) {
            for ($j = 0; $j <= count($nums); $j++) {
                if (($i != $j) && ($nums[$i] + $nums[$j]) == $target) {
                    return [$i, $j];
                    break;
                }
            }
        }
        return [];
    }
}

print_r((new Solution())->twoSum([2, 7, 11, 15], 9));
