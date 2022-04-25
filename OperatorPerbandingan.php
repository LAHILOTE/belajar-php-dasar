<?php
echo <<<TEXT
"10" sama dengan (==) 10 : 
TEXT;
var_dump("10" == 10);
echo <<<TEXT
"10" identik dengan (===) 10 : 
TEXT;
var_dump("10" === 10);


echo <<<TEXT
"10" tidak sama dengan (!=) 9 : 
TEXT;
var_dump("10" != 9);
echo <<<TEXT
"10" tidak sama dengan (<>) 10 : 
TEXT;
var_dump("10" <> 10);


?>