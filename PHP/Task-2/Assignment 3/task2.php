<?php

function get_arguments1() {
    $all = implode(" ", func_get_args());
    return $all;
}

function get_arguments2(...$args) {
    $all = implode(" ", $args);
    return $all;
}

echo get_arguments1("Hello", "Elzero", "Web", "School") . "\n";
echo get_arguments1("I", "Love", "PHP") . "\n";


?>
