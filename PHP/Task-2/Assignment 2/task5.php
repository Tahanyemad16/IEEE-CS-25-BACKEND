<?php
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

for ($i = $start; $i < count($mix); $i++) {
    if (is_int($mix[$i]) && $mix[$i] != $start + 1) {
        echo $mix[$i] . "<br>";
    }
}
?>
