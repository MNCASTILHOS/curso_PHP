<?php

$matheus = [
    'nome' => 'Matheus',
    'idade' => 29,
    'profissao' => 'Programador'
];


$alexia = [
    'nome' => 'Aléxia',
    'idade' => 21,
    'profissao' => 'Eng. Civil'
];

foreach($matheus as $carac => $value) {

    echo "$carac => $value <br>";
}

echo "<br>";

foreach($alexia as $carac => $value) {

    echo "$carac => $value <br>";
}

