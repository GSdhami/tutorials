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
 
$veggies = ["Spinach", "Corn", "Carrots", "Tomatoes", "Cucumbers"];
 
$tractor = $dynamic[0][0];
 
$tech = [
    'Google',
    'Microsoft',
    'Apple',
    'Adobe',
    'Cisco',
    'Juniper',
    'Lenovo',
    'Samsung',
    'Red Hat'
];
 
 
$v1 = count($dynamic);
$v2 = count($veggies);
$v3 = count($tractor);
$v4 = count($tech);
 
echo "We have $v1 items in the dynamic array, $v2 vegetables, $v3 tractors, and $v4 tech companies.  Thanks for using the count function.";
