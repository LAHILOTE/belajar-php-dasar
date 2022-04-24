<?php
$values = array(10, 9, 8, 7.5);
var_dump($values);


$names = ["Machmud", "Wahyu", "Domili"];
var_dump($names);

var_dump($names[1]);

$names[0] = "Mudher";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "Wahyudi";
var_dump($names);

var_dump(count($names));



$mudher = array(
    "id" => "Mudher",
    "name" => "Mudher Domili",
    "age" => 27
);

var_dump($mudher);
var_dump($mudher["age"]);

$budi = [
    "id" => "budi",
    "name" => "Budi Test",
    "age" => 35
];
var_dump($budi);



$mudher = array(
    "id" => "Mudher",
    "name" => "Mudher Domili",
    "age" => 27,
    "address" => array(
        "city" => "Gorontalo",
        "country" => "Indonesia"
    ),
    "religion" => "Islam"
);

$budi = [
    "id" => "budi",
    "name" => "Budi Test",
    "age" => 35,
    "address" => [
        "city" => "Gorontalo",
        "country" => "Indonesia"
    ],
    "religion" => "Islam"
];

var_dump($mudher,$budi)
?>