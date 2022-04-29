<?php
// Tanpa Coalescing Operator
$data =[
    "action" => "Create",
];

if (isset($data["action"])){
    $action = $data["action"];
} else {
    $action = "Nothing";
}

echo $action . PHP_EOL;


// Dengan Coalescing Operator
$data = [];
$action = $data["action"] ?? "Nothing";

echo $action;
?>