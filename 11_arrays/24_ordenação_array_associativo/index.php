<?php

$arr = [
    "Mateus" => 29,
    "Carlos" => 15,
    "Lucas" => 35,
    "Antonio" => 32,
];

asort($arr);

print_r($arr);
echo "<br>";


$arr2 = [
    "Mateus" => 95,
    "Carlos" => 30,
    "Lucas" => 23,
    "Antonio" => 85,
];

asort($arr2);

print_r($arr2);
echo "<br>";


$arr3 = [
    "Mateus" => 29,
    "Carlos" => 15,
    "Lucas" => 35,
    "Antonio" => 32,
];

ksort($arr3);

print_r($arr3);
echo "<br>";

$arr4 = [
    "Mateus" => 29,
    "Carlos" => 15,
    "Lucas" => 35,
    "Antonio" => 32,
];

krsort($arr4);

print_r($arr4);
echo "<br>";