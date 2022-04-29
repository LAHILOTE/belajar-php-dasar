<?php
// Kondisi Perulangan Tanpa Henti
// for( ; ; ){
//     echo "Ini adalah for loop" . PHP_EOL;
// }

// Perulangan Dengan Kondisi
echo "Perulangan Dengan Kondisi".PHP_EOL;
echo "-------------------------".PHP_EOL;
$counter = 1;

for ( ; $counter <= 10; ){
    echo "Ini adalah Loop ke-$counter" . PHP_EOL;
    $counter++;
}

echo PHP_EOL;

// Kondisi Perulangan Dengan Init Statement
echo "Perulangan Dengan Init Statement".PHP_EOL;
echo "--------------------------------".PHP_EOL;
for($counter = 1; $counter <= 10; ){
    echo "Hello For Loop : " . $counter . PHP_EOL;
    $counter++;
}

echo PHP_EOL;

// Kondisi Perulangan Dengan Post Statement
echo "Perulangan Dengan Post Statement" .PHP_EOL;
echo "--------------------------------".PHP_EOL;
for($counter = 1; $counter <= 10; $counter++ ){
    echo "Hello For Loop - " . $counter . PHP_EOL;
}
?>