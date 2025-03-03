<?php
$friends = [
    "Ahmed Gamal" => "AG",
    "Osama Mohamed" => "OM",
    "Mahmoud Gamal" => "MG",
    "Ahmed Samy" => "AS"
];

$friends = array_reverse($friends, true);
$friends= array_flip($friends);
$friends = array_change_key_case($friends);

echo "<pre>";
print_r($friends);
echo "</pre>";

?>
