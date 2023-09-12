<?php
// https://leetcode.com/problems/remove-element/?envType=study-plan-v2&envId=top-interview-150

function removeElement(&$nums, $val)
{

    $count = count($nums) - 1;
    for ($i = 0; $i <= $count; $i++) {
        if ($nums[$i] === $val) {
            unset($nums[$i]);
        }
    }

    // return count($nums);
}




$nums = [0,1,2,2,3,0,4,2];

removeElement($nums,2);
print_r(count($nums));
print_r($nums);

$nums = [3,2,2,3];
echo PHP_EOL;
$k = removeElement($nums,3);
print_r(count($nums));
print_r($nums);

