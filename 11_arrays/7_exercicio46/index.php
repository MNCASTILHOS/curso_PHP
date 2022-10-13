<?php

$arr = [
    [5, 7, 10, 12],
    ['casa', 'carro', 'celular', 'forno'],
    [50, 100, 150, 200]
];

for($i = 0; $i < count($arr); $i++) {

    print_r($arr[$i]);
    echo "<br>" . "imprimindo array:" . ($i + 1) . "<br>";

    for($j = 0; $j < count($arr[$i]); $j++){

        print_r($arr[$i][$j] . "<br>");
    }

}
