<?php
// https://leetcode.com/problems/best-time-to-buy-and-sell-stock/?envType=study-plan-v2&envId=top-interview-150

//
function maxProfit($prices)
{
    $n = count($prices);
    if ($n === 0) return 0;

    $profit = 0;
    $buy = $prices[0];

    for ($i = 1; $i < $n; $i++) {
        if ($buy < $prices[$i]) {
            $temp  =  $prices[$i] - $buy;
            if ($temp > $profit) {
                $profit = $temp;
            }
        } else {
            $buy = $prices[$i];
        }
    }

    return $profit > 0 ? $profit : 0;
}

// Brute Force not efficient
function maxProfit2($prices)
{
    $n = count($prices);
    if ($n === 0) return 0;

    $profits = [];
    $max = 0;

    for ($i = 0; $i < $n; $i++) {
        if (!isset($profits[$prices[$i]])) {
            $profits[$prices[$i]] = 0;
        }

        for ($j = $i + 1; $j < $n; $j++) {
            $sub =  $prices[$j] - $prices[$i];
            if ($sub > $profits[$prices[$i]]) {
                $profits[$prices[$i]] = $sub;
            }
        }

        if ($profits[$prices[$i]] > $max) {
            $max = $profits[$prices[$i]];
        }
    }


    return $max;
}

$nums = [7, 1, 5, 3, 6, 4];
$x = maxProfit($nums);
print_r($x);

echo PHP_EOL;

$nums = [7, 6, 4, 3, 1];
$x = maxProfit($nums);
print_r($x);

echo PHP_EOL;

$nums = [1, 2];
$x = maxProfit($nums);
print_r($x);
