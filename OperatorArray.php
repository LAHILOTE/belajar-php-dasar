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
$aa = [
    "first_name" => "Mudher",
    "last_name" => "Domili"
];

$b = [
    "last_name" => "Domili",
    "first_name" => "Mudher",
];
$bb = [
    "last_name" => "Domili",
    "first_name" => "Mudhor",
];
// Operator Array Equality
var_dump($a == $b);
// Operator Array Identity
var_dump($a === $b);
// Operator Array Inequality
var_dump($a != $bb);
// Operator Array Inequality
var_dump($a <> $bb);
// Operator Array Nonidentity
var_dump($a !== $aa);
echo "\n";
?>