<?php
// https://leetcode.com/problems/remove-element/?envType=study-plan-v2&envId=top-interview-150

function removeElement(&$nums, $val)
{
    $count = count($nums);
    if ($count === 0) return 0;
    $newLength = 0;

    for ($i = 0; $i < $count; $i++) {
        if ($nums[$i] !== $val) {
            $nums[$newLength++] = $nums[$i];
        }
    }
    return $newLength;
}




$nums = [0, 1, 2, 2, 3, 0, 4, 2];

$k = removeElement($nums, 2);
print_r($k);
print_r($nums);

echo PHP_EOL;
$nums = [3, 2, 2, 3];
$k = removeElement($nums, 3);
print_r($k);
print_r($nums);
