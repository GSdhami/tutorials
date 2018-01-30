<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Single and Double Quoted Strings</title>
</head>
<body>

<?php
$my_str = 'World';
echo "Hello, $my_str!<br>";
echo 'Hello, $my_str!<br>';
 
echo '<pre>Hello\tWorld!</pre>';
echo "<pre>Hello\tWorld!</pre>";
echo 'I\'ll be back';
?>

<?php

$my_str = 'Welcome to Tutorial Republic';
 
// Calculating and displaying string length
echo strlen($my_str);
?>
<?php
$my_str = 'If the facts do not fit the theory, change the facts.';
 
// Display replaced string
echo str_replace("facts", "truth", $my_str);
?>
<?php
$my_str = 'You can do anything, but not everything.';
 
// Display reversed string
echo strrev($my_str);
?>
</body>
</html>                                		