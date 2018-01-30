<?php
$arrayone = [
    'Google',
    'Microsoft',
    'Apple',
    'Adobe',
    'Cisco',
    'Juniper',
    'Lenovo',
    'Samsung',
    'Red Hat',
	'LG'
];
 
$arraytwo = [
    'Google',
    'Microsoft',
    'Apple',
    'Adobe',
    'Cisco',
    'Juniper',
    'Lenovo',
    'Samsung',
	'Sony'
];
 
$diff = array_diff($arrayone, $arraytwo);
 
print_r($diff);