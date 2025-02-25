//first method
<?php
$a = "10";

echo intval($a) . "\n"; 
echo gettype(intval($a)) . "\n"; 
?>


//second method
<?php
$a = "10";

echo $a + 0 . "\n"; 
echo gettype($a + 0) . "\n";
?>


//third method
<?php
$a = "10";

echo (int)$a . "\n"; 
echo gettype((int)$a) . "\n";
?>
