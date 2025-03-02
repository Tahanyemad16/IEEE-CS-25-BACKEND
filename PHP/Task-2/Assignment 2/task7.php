<?php

$mix = [1, 2, "A", "B", "C", 3, 4];

$counter=0;
for($i=0;$i<count($mix);$i++){
    if(is_int($mix[$i])){
        echo $mix[$i];
        echo "<br>";
        $counter++;
    }
}
echo "$counter Numbers Printed <br>";
echo count($mix)-$counter." Letters Ignored"




?>