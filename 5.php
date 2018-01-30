<?php
$array = [
    'How to build a website',
    'Design with Twitter Bootstrap',
    'Handle the backend with PHP',
    'Eat Veggies for good health',
    'The answers to all of your questions',
    'Racing in the Nascar Series'
];
 
$array1 = array_reverse($array);
$array2 = array_reverse($array, true);

foreach($array as $a =>$b){
	echo $a.'-'.$b.'<br>';
}
echo '<br/>';
 
foreach ($array1 as $a => $b) {
    echo $a . ' - ' . $b . '<br>';
}
 
echo '<br>';
 
foreach ($array2 as $a => $b) {
    echo $a . ' - ' . $b . '<br>';
}
?>