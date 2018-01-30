<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP while Loop</title>
</head>
<body>

<?php
$i = 1;
while($i <= 3){
	$i++;
    echo "The number is " . $i . "<br>";
}
?>
<?php
// do while loop 
$i = 1;
do{
    $i++;
    echo "The number is " . $i . "<br>";
}
while($i <= 3);
?>
<?php
// php for loop
for($i=1; $i<=3; $i++){
    echo "The number is " . $i . "<br>";
}
?>
<?php
// php foreach loop
$colors = array("Red", "Green", "Blue");
 
// Loop through count array
foreach($colors as $value){
    echo $value . "<br>";
}
?>
<?php
// php foreach loop
$superhero = array(
    "name" => "Peter Parker",
    "email" => "peterparker@mail.com",
    "age" => 18
);
 
// Loop through superhero array
foreach($superhero as $key => $value){
    echo $key . " : " . $value . "<br>";
}
?>
</body>
</html>                                		