<?php
$array = [
    'Ten Steps To a Better You',
    'Ten Steps To a Better You',
    'Ten Steps To a Better You',
    'Eating Spiniach - The Pros Show You How',
    'Eating Spiniach - The Pros Show You How',
    'Falling in Love with Arrays',
    'Falling in Love with Arrays',
    'Stock Market Secrects Jim Cramer Will Not Share',
    'Uplifting News by ZeroHege',
    'Uplifting News by ZeroHege'
];
$unique = array_unique($array);
 
foreach ($unique as $u) {
    echo $u . '<br>';
}
?>