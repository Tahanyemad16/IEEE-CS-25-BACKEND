
<?php

//first method
$a = "10";

echo (int)$a."<br>"; 
echo var_dump((int)$a)."<br>"; 



//second method


echo $a + 0 ."<br>" ; 
echo gettype($a + 0)."<br>" ;


//third method


echo (int)$a."<br>"; 
echo gettype((int)$a) ."<br>";
?>
