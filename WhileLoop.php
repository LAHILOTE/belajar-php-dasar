<?php
$counter = 1;

while($counter <= 10){
    echo "Ini adalah While Loop ke-$counter" . PHP_EOL;
    $counter++;
}

// Syntax Alternatif
echo "Syntax Alternatif" . PHP_EOL;
while($counter <= 10) :
    echo "Ini adalah While Loop ke-$counter" . PHP_EOL;
    $counter++;
endwhile;

?>