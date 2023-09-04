<?php
// https://leetcode.com/problems/merge-sorted-array/?envType=study-plan-v2&envId=top-interview-150

function merge(&$nums1, $m, $nums2, $n)
{

    $i = $m - 1;
    $j = $n - 1;
    $key = $m + $n - 1;

    while ($j >= 0 && $i >= 0) {
        if ($nums1[$i] > $nums2[$j]) {
            $nums1[$key--] = $nums1[$i--];
        } else {
            $nums1[$key--] = $nums2[$j--];
        }
    }

    while ($i >= 0) {
        $nums1[$key--] = $nums1[$i--];
    }

    while ($j >= 0) {
        $nums1[$key--] = $nums2[$j--];
    }
}




$nums1 = [2, 3, 4, 0, 0, 0];
$m = 3;
$nums2 = [1, 5, 6];
$n = 3;
merge($nums1, $m, $nums2, $n);
print_r($nums1);

$nums1 = [1];
$m = 1;
$nums2 = [];
$n = 0;
merge($nums1, $m, $nums2, $n);
print_r($nums1);

$nums1 = [0];
$m = 0;
$nums2 = [1];
$n = 1;
merge($nums1, $m, $nums2, $n);
print_r($nums1);
