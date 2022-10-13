<?php

$a = 5;
$b = 3 + 2;
$c = 10;
$d = 10;
$e = "10";

if($a == $b) {
    echo " comparação verdadeira 1 <br>";
}

if($a === $b) {
    echo " comparação verdadeira 2 <br>";
}

if($c == $a) {
    echo " comparação verdadeira 3 <br>";
}

if($c == $d) {
    echo " comparação verdadeira 4 <br>";
}

if($d == $e) {
    echo " comparação verdadeira 5 <br>";
}

if($d === $e) {
    echo " comparação verdadeira 6 <br>";
}