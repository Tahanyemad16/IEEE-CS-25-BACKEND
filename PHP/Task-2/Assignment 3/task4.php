<?php
function multiply(...$numbers) {
    $result = 1;
    $hasNumber = false;

    foreach ($numbers as $num) {
        if (is_string($num)) continue;
        if (is_float($num)) $num = (int) $num;
        
        $result *= $num;
        $hasNumber = true;
    }

    return $hasNumber ? $result : 0;
}

// Needed Output
echo multiply(10, 20) . "<br>"; // 200
echo multiply("A", 10, 30) . "<br>"; // 300
echo multiply(100.5, 10, "B") . "<br>"; // 1000
?>
