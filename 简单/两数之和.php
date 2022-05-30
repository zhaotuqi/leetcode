<?php

class Solution
{
    function twoSumOne($nums, $target)
    {
        $array = [];
        for ($i = 0; $i < count($nums); $i++) {
            for ($j = 1; $j < count($nums); $j++) {
                if ($nums[$i] + $nums[$j] == $target && ($i != $j)) {
                    return $array = array($i, $j);
                }
            }
        }
        return $array;
    }

    function twoSumTwo($nums, $target)
    {
        $array = [];
        for ($i = 0; $i < count($nums); $i++) {
            $num = $nums[$i];
            if (array_key_exists($target-$num, $array)) {
                return [$i, $array[$target-$num]];
            }
            $array[$num] = $i;
        }
    }
}

$nums = [1, 5, 6, 7, 2, 8];
$target = 7;
$fd = new Solution();
$oneRet = $fd->twoSumOne($nums, $target);
var_dump($oneRet);
$towRet = $fd->twoSumTwo($nums, $target);
var_dump($towRet);

