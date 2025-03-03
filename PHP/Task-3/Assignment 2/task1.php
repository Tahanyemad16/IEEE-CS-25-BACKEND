<?php

$friends = [
    "AG" => "Ahmed Gamal",
    "OM" => "Osama Mohamed",
    "MG" => "Mahmoud Gamal",
    "AS" => "Ahmed Samy",
    "FA" => "Farid Ahmed",
    "SM" => "Sayed Mohamed"
];

$chunks = array_chunk($friends, 2, true);

foreach ($chunks as &$key) {
    $key = array_change_key_case($key, CASE_LOWER);
}

echo "<pre>";
print_r($chunks);
echo "</pre>";

?>
