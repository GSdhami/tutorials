<?php
 
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

echo "<pre>";
print_r($dynamic);
echo "</pre>";
$one = is_array($dynamic);
 
$two = is_array($dynamic['number']);
 
$three = is_array($dynamic[0]);
 
echo $one ? 'The $dynamic variable is an array<br>' : 'The $dynamic variable is not an array<br>';
echo $two ? 'The "number" key of the $dynamic variable is an array<br>' : 'The "number" key of the $dynamic variable is not an array<br>';
echo $three ? 'The 0 index of the $dynamic variable is an array<br>' : 'The 0 index of the $dynamic variable is not an array<br>';
 
?>