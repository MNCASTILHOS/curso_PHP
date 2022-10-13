<?php

$a = 10;
$b = 15;

function testeEscopo(){

    $a = 5;

    global $b;

    static $c = 0;

    $a++;

    $b++;

    $c++;

    echo "ESCOPO LOCAL DE A: $a <br>";
    echo "ESCOPO LOCAL DE B: $b <br>";
    echo "ESCOPO LOCAL DE C: $c <br>";
}

echo "ESCOPO LOCAL DE A: $a <br>";
echo "ESCOPO LOCAL DE B: $b <br>";

testeEscopo();

echo "ESCOPO LOCAL DE B 2: $b <br>";

testeEscopo();
