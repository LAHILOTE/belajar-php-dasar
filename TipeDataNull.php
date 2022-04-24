<?php
$name = "Mudher";
$name = null;

$age = null;

echo "Name :";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

echo "Is Name Null? : ";
var_dump(is_null($name));


$contoh = "Mudher";
unset($contoh);

$contoh = "Domili";
$contoh = null;

var_dump(isset($contoh));
?>