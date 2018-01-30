<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Indexed Arrays</title>
</head>
<body>

<?php

echo "<pre>";
$colors = array("Red", "Green", "Blue");

// Printing array structure
print_r($colors);
?>
<?php
// Associative array
$ages = array("Peter"=>22, "Clark"=>32, "John"=>28);

// Printing array structure
print_r($ages); 
?>
<?php
// multidimention array
// Define nested array
$contacts = array(
    array(
        "name" => "Peter Parker",
        "email" => "peterparker@mail.com",
    ),
    array(
        "name" => "Clark Kent",
        "email" => "clarkkent@mail.com",
    ),
    array(
        "name" => "Harry Potter",
        "email" => "harrypotter@mail.com",
    )
);
// Access nested value
echo "Peter Parker's Email-id is: " . $contacts[0]["email"];
?>
<?php
// array structure
// Define array
$cities = array("London", "Paris", "New York");
 
// Display the cities array
Print_r($cities);
?>
<?php
// Define array
$cities = array("London", "Paris", "New York");
 
// Display the cities array complete structure
var_dump($cities);
?>
</body>
</html>                                		