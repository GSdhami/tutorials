<?php
$array = [
    'How to build a website',
    'Design with Twitter Bootstrap',
    'Handle the backend with PHP',
    'Eat Veggies for good health',
    'The answers to all of your questions',
    'Racing in the Nascar Series'
];
 
function lower($array)
{
    return strtolower($array);
}
 
$lc = array_map('lower', $array);
foreach ($lc as $l) {
    echo $l . '<br>';
}
?>