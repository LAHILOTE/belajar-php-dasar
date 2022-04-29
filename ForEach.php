<?php
$names = ["Mudher", "Wahyu", "Domili"];

for ($i = 0; $i < count($names); $i++){
    echo "Data ke-". $i+1 . " = $names[$i]" . PHP_EOL;
}

echo PHP_EOL;

foreach ($names as $name){
    echo "Data $name" . PHP_EOL;
}
?>