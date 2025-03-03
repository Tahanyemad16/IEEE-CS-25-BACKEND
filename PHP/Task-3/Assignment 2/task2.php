<?php

$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];


$codes = array_map("strtolower", $codes);

echo  "<pre>";
print_r(array_combine($codes,$means));
echo "</pre>";







?>