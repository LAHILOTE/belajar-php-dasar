<?php

// Tanpa ForEach
$names = ["Mudher", "Wahyu", "Domili"];

for ($i = 0; $i < count($names); $i++){
    echo "Data ke-". $i+1 . " = $names[$i]" . PHP_EOL;
}

echo PHP_EOL;

// Dengan ForEach
foreach ($names as $index => $name){
    echo "Data ke " . $index+1 . " " . $name . PHP_EOL;
}

echo PHP_EOL;

// Dengan ForEach dan Key
$person = [
    "first_name" => "Mudher",
    "middle_name" => "Wahyu",
    "last_name" => "Domili",
];

foreach($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}
?>