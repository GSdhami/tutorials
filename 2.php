<?php
$veggies = ["Spinach", "Corn", "Carrots", "Tomatoes"];
 
if (in_array("Tomatoes", $veggies)) {
    echo "The best Tomatoes make the best Red Sauce!<br>";
}
 
if (in_array("Snickers Bar", $veggies)) {
    echo "Eating a Snickers is Great.";
}
 
$dynamic = [
    'number' => 7,
    'live' => 'House',
    'drive' => 'Car',
    [
        'mow' => 'grass',
        [
            'tractor' => 'John Deere',
            'tractor2' => 'Kubota',
            'tractor3' => 'New Holland'
        ],
        'landscape' => 'mulch'
    ]
];
 
$tractor = $dynamic[0][0]['tractor'];
 
if (in_array('grass', $dynamic[0])) {
    echo "Time to take a spin on the $tractor and get the grass cut!<br>";
}
?>