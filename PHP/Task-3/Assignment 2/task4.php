<?php

$nums = [10, 20, 30];

$sum = array_reduce($nums, function ($carry, $item) {
    return $carry + $item;
}, 0);

echo $sum; // 60



?>