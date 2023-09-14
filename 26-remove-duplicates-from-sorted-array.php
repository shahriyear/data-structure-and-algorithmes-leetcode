<?php
// https://leetcode.com/problems/remove-duplicates-from-sorted-array/description/?envType=study-plan-v2&envId=top-interview-150

function removeDuplicates(&$nums)
{
    $count = count($nums);
    if ($count === 0) return 0;
    $index = 0;
    for ($i = 1; $i < $count; $i++) {
        if ($nums[$index] != $nums[$i]) {
            $nums[++$index] = $nums[$i];
        }
    }
    return $index + 1;
}




$nums = [1, 1, 2];
$k = removeDuplicates($nums);
print_r($k);
print_r($nums);

echo PHP_EOL;
$nums = [0, 0, 1, 1, 1, 2, 2, 3, 3, 4];
$k = removeDuplicates($nums);
print_r($k);
print_r($nums);
