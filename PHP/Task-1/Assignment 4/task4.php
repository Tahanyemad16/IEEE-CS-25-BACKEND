<?php
$a = 10;
$b = 20;
$c = 15;


var_dump($a == 10); // True, $a = 10
var_dump($c == 15); // True , $c = 15
var_dump($a < $b);  // True, 10<20
var_dump($b > $a);  // True, 20>10
var_dump($a != $c); // True, لأن 10 !=  15
var_dump($a === 10); // True, 10
var_dump(gettype($a) == "integer"); // True ,"integer"
var_dump(gettype($b) == "integer"); // True , "integer"
var_dump(gettype((float) $a) == "double"); // True , "double"
?>
