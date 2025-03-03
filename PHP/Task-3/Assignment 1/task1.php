<?php

$num_one = -1;
$num_two = 2.5;

$let_one = "o";
$let_two = "z";

$str = "El%er0";
$str = substr_replace($str, $let_two, $num_two,1);

$str = substr_replace($str, $let_one, $num_one); 

echo $str; // Elzero
?>