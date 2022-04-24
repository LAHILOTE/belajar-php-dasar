<?php

$a = 20;
$b = 10;

$resultTambah = $a + $b;
var_dump($resultTambah);
$resultNegative = -$resultTambah;
var_dump($resultNegative);
$resultPositive = +$resultTambah;
var_dump($resultPositive);

echo "\n";

$resultKurang = $a - $b;
var_dump($resultKurang);
$resultNegative = -$resultKurang;
var_dump($resultNegative);
$resultPositive = +$resultKurang;
var_dump($resultPositive);

echo "\n";

$resultKali = $a * $b;
var_dump($resultKali);
$resultNegative = -$resultKali;
var_dump($resultNegative);
$resultPositive = +$resultKali;
var_dump($resultPositive);

echo "\n";

$resultBagi = $a / $b;
var_dump($resultBagi);
$resultNegative = -$resultBagi;
var_dump($resultNegative);
$resultPositive = +$resultBagi;
var_dump($resultPositive);

echo "\n";

$c = 13;
$d = 9;
$resultSisaBagi = $c % $d;
var_dump($resultSisaBagi);
$resultNegative = -$resultSisaBagi;
var_dump($resultNegative);
$resultPositive = +$resultSisaBagi;
var_dump($resultPositive);

echo "\n";

$e = 2;
$f = 3;
$resultPangkat = $e ** $f;
var_dump($resultPangkat);
$resultNegative = -$resultPangkat;
var_dump($resultNegative);
$resultPositive = +$resultPangkat;
var_dump($resultPositive);
?>