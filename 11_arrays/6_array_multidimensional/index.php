<?php

$arr = [
    [1, 2, 3],
    [2, 4, 6]
];

print_r($arr);
echo "<br>";

echo $arr[0][1] . "<br>"; //acessando primeiro array, e o segundo elemnto
echo $arr[1][2] . "<br>"; // acessando o segundo array, e ultimo elemnto

echo count($arr) . "<br>"; // arrey global
echo count($arr[0]) . "<br>"; // array interno