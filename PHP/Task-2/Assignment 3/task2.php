<?php
function get_arguments() {
    $all = implode(" ", func_get_args());
    return $all;
}

// Needed Output
echo get_arguments("Hello", "Elzero", "Web", "School") . "<br>"; // Hello Elzero Web School
echo get_arguments("I", "Love", "PHP"); // I Love PHP
?>
