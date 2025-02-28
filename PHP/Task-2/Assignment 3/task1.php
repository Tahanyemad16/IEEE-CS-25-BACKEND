<?php
function greeting($name, $gender = "") {
    $title = ($gender === "Male") ? "Mr " : (($gender === "Female") ? "Miss " : "");
    return "Hello " . $title . $name . "<br>";
}

// Needed Output
echo greeting("Osama", "Male");   // Hello Mr Osama
echo greeting("Eman", "Female");  // Hello Miss Eman
echo greeting("Sameh");           // Hello Sameh
?>
