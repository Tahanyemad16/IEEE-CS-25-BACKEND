<?php
function check_status($a, $b, $c) {
    $name = is_string($a) ? $a : (is_string($b) ? $b : $c);
    $age = is_numeric($a) ? $a : (is_numeric($b) ? $b : $c);
    $status = is_bool($a) ? $a : (is_bool($b) ? $b : $c);

    return "Hello $name, Your Age Is $age, You Are " . ($status ? "Available" : "Not Available") . " For Hire";
}

// Needed Output
echo check_status("Osama", 38, true) . "<br>";  // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(38, "Osama", true) . "<br>";  // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(true, 38, "Osama") . "<br>";  // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(false, "Osama", 38) . "<br>"; // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"
?>
