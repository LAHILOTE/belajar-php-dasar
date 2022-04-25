<?php
echo <<<TEXT
"10" sama dengan (==) 10 : 
TEXT;
var_dump("10" == 10);
echo <<<TEXT
"10" identik dengan (===) 10 : 
TEXT;
var_dump("10" === 10);

echo "\n";

echo <<<TEXT
"10" tidak sama dengan (!=) 9 : 
TEXT;
var_dump("10" != 9);
echo <<<TEXT
"10" tidak sama dengan (<>) 10 : 
TEXT;
var_dump("10" <> 10);
echo <<<TEXT
"10" tidak identik dengan (!==) 10 : 
TEXT;
var_dump("10" !== 10);

echo "\n";

echo <<<TEXT
"10" kurang dari (<) 15 : 
TEXT;
var_dump("10" < 15);
echo <<<TEXT
"10" kurang dari atau sama dengan (<=) 10 : 
TEXT;
var_dump("10" <= 15);
echo <<<TEXT
"10" lebih dari (>) 15 : 
TEXT;
var_dump("10" > 15);
echo <<<TEXT
"10" lebih dari atau sama dengan (>=) 10 : 
TEXT;
var_dump("10" >= 10);

?>