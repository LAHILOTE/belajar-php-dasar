<?php

$first = [
    "first_name" => "Mudher"
];
$last = [
    "last_name" => "Domili",
];
// Operator Array Union
$full = $first + $last;
var_dump($full);
echo "\n";

$a = [
    "first_name" => "Mudher",
    "last_name" => "Domili"
];

$b = [
    "last_name" => "Domili",
    "first_name" => "Mudher",
];
// Operator Array Equality
var_dump($a == $b);
// Operator Array Identity
var_dump($a === $b);
echo "\n";

// Operator Array Inequality
// Operator Array Inequality
// Operator Array Nonidentity

?>