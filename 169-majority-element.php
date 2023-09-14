<?php
// https://leetcode.com/problems/majority-element/description/?envType=study-plan-v2&envId=top-interview-150

//Boyer Moore Voting Algorithm 
function majorityElement($nums)
{
    $n = count($nums);
    if ($n === 0) return -1;

    $major = 0;
    $count = 0;

    //finding the major
    for ($i = 0; $i < $n; $i++) {

        if ($count === 0) {
            $major = $nums[$i];
            $count = 1;
        } else if ($major === $nums[$i]) {
            $count++;
        } else {
            $count--;
        }
    }

    //counting the major
    $count = 0;
    for ($i = 0; $i < $n; $i++) {
        if ($major === $nums[$i]) {
            $major = $nums[$i];
            $count++;
        }
    }

    //verify the major
    if ($count > floor($n / 2)) {
        return $major;
    }

    return -1;
}


//Using Hash Table
function majorityElement2($nums)
{
    $n = count($nums);
    if ($n === 0) return 0;
    $mid = floor($n / 2);

    $hash = [];

    for ($i = 0; $i < $n; $i++) {
        if (!isset($hash[$nums[$i]])) {
            $hash[$nums[$i]] = 1;
        } else {
            $hash[$nums[$i]]++;
        }
    }

    for ($i = 0; $i < $n; $i++) {
        if ($hash[$nums[$i]] > $mid) {
            return $nums[$i];
        }
    }

    return 0;
}

$nums = [3, 2, 3];
$x = majorityElement($nums);
print_r($x);

echo PHP_EOL;

$nums = [2, 2, 1, 1, 1, 2, 2];
$x = majorityElement($nums);
print_r($x);

echo PHP_EOL;

$nums = [6, 5, 5];
$x = majorityElement($nums);
print_r($x);
